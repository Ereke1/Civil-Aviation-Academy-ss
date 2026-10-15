<?php

namespace App\Services;

use App\Models\Department;
use App\Models\News;
use App\Models\Page;
use Illuminate\Support\Facades\Http;

class GeminiChatService
{
    public function answer(string $question, string $locale = 'ru'): ?string
    {
        $apiKey = config('services.gemini.api_key');

        if (empty($apiKey)) {
            return null;
        }

        $knowledge = $this->buildKnowledgeContext($question, $locale);

        if (empty(trim($knowledge))) {
            return null;
        }

        $prompt = $this->composePrompt($question, $knowledge, $locale);

        $response = Http::withOptions([
            'http_errors' => false,
            'timeout' => 30,
        ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=' . $apiKey, [
            'contents' => [
                [
                    'parts' => [
                        [
                            'text' => $prompt,
                        ],
                    ],
                ],
            ],
            'generationConfig' => [
                'temperature' => 0.1,
                'topP' => 0.8,
            ],
        ]);

        if ($response->failed()) {
            return null;
        }

        $payload = $response->json();
        $text = $payload['candidates'][0]['content']['parts'][0]['text'] ?? null;

        if (!is_string($text) || trim($text) === '') {
            return null;
        }

        return $this->cleanAnswer($text);
    }

    private function buildKnowledgeContext(string $question, string $locale): string
    {
        $keywords = $this->extractKeywords($question);
        $contextParts = [];

        $pageQuery = Page::query();
        $newsQuery = News::query();
        $departmentQuery = Department::query();

        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
                $keyword = trim($keyword);

                if ($keyword === '') {
                    continue;
                }

                $pageQuery->orWhere(function ($query) use ($keyword) {
                    $query->where('title_ru', 'like', '%' . $keyword . '%')
                        ->orWhere('title_kk', 'like', '%' . $keyword . '%')
                        ->orWhere('title_en', 'like', '%' . $keyword . '%')
                        ->orWhere('desc_ru', 'like', '%' . $keyword . '%')
                        ->orWhere('desc_kk', 'like', '%' . $keyword . '%')
                        ->orWhere('desc_en', 'like', '%' . $keyword . '%');
                });

                $newsQuery->orWhere('titles', 'like', '%' . $keyword . '%')
                    ->orWhere('descriptions', 'like', '%' . $keyword . '%');

                $departmentQuery->orWhere('name', 'like', '%' . $keyword . '%');
            }
        }

        foreach ([$pageQuery->limit(8)->get(), $newsQuery->limit(8)->get(), $departmentQuery->limit(8)->get()] as $resultSet) {
            foreach ($resultSet as $item) {
                $text = $this->getKnowledgeText($item, $locale);

                if (trim($text) !== '') {
                    $contextParts[] = $text;
                }
            }
        }

        $uniqueParts = array_values(array_unique($contextParts));

        return implode("\n\n", array_slice($uniqueParts, 0, 20));
    }

    private function composePrompt(string $question, string $knowledge, string $locale): string
    {
        $languageInstruction = [
            'ru' => 'Отвечай на русском языке.',
            'kk' => 'Жауабыңызды қазақ тілінде беріңіз.',
            'en' => 'Answer in English.',
        ];

        $instruction = $languageInstruction[$locale] ?? 'Отвечай на языке пользователя.';

        return "Ты помощник Академии гражданской авиации. " .
            "Используй только информацию из предоставленного контекста и не придумывай факты, даты, цены, контакты, названия программ или правила. " .
            "Если в контексте нет точного ответа, честно скажи об этом и предложи оставить сообщение сотруднику Академии. " .
            "Отвечай кратко: максимум 2-4 коротких предложения. " .
            "Если в контексте есть источник, обязательно добавь в конце отдельную строку с его полной ссылкой в формате: Подробнее на сайте: https://... . " .
            "Не изменяй и не сокращай URL источника. " .
            $instruction . "\n\n" .
            "Контекст:\n" . $knowledge . "\n\n" .
            "Вопрос пользователя: " . $question;
    }

    private function getKnowledgeText($item, string $locale): string
    {
        if ($item instanceof Page) {
            $title = $this->getLocalizedValue($item, 'title_', $locale);
            $description = strip_tags($this->getLocalizedValue($item, 'desc_', $locale));
            $url = $item->getLink();

            return trim($title . ' ' . mb_substr($description, 0, 2500) . "\nИсточник: " . $url);
        }

        if ($item instanceof News) {
            $title = $this->getSerializedLocalizedValue($item->titles, $locale);
            $description = strip_tags($this->getSerializedLocalizedValue($item->descriptions, $locale));
            $url = $item->getLink();

            return trim($title . ' ' . mb_substr($description, 0, 2500) . "\nИсточник: " . $url);
        }

        if ($item instanceof Department) {
            return trim((string) ($item->name ?? ''));
        }

        return '';
    }

    private function getLocalizedValue($item, string $prefix, string $locale): string
    {
        $localeMap = [
            'ru' => 'ru',
            'kk' => 'kk',
            'en' => 'en',
        ];

        $local = $localeMap[$locale] ?? 'ru';
        $field = $prefix . $local;

        return (string) ($item->{$field} ?? '');
    }

    private function getSerializedLocalizedValue($value, string $locale): string
    {
        $data = @unserialize((string) $value);

        if (is_object($data)) {
            return (string) ($data->{$locale} ?? $data->ru ?? '');
        }

        if (is_array($data)) {
            return (string) ($data[$locale] ?? $data['ru'] ?? '');
        }

        return '';
    }

    private function cleanAnswer(string $text): string
    {
        $text = preg_replace('/\s+/', ' ', trim($text));
        $text = str_replace(["\n\n", "\n"], ' ', $text);

        return trim((string) $text);
    }

    private function extractKeywords(string $question): array
    {
        $normalized = strtolower($question);
        $normalized = preg_replace('/[^\pL\pN\s]/u', ' ', $normalized);
        $words = preg_split('/\s+/', trim((string) $normalized));

        $filtered = [];

        foreach ($words as $word) {
            $word = trim($word);

            if (in_array($word, ['как', 'что', 'где', 'когда', 'есть', 'какие', 'где', 'спасибо', 'please', 'the', 'and', 'or', 'при', 'в', 'на', 'из', 'для'], true)) {
                continue;
            }

            if (strlen($word) > 2) {
                $filtered[] = $word;
            }
        }

        return array_values(array_unique($filtered));
    }
}
