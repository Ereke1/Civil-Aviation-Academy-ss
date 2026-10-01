<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\NewConsultationRequestMail;
use App\Models\ChatMessage;
use App\Services\GeminiChatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Throwable;

class ChatController extends Controller
{
    public function ask(Request $request, GeminiChatService $gemini)
    {
        $validator = Validator::make($request->all(), [
            'message' => ['required', 'string', 'min:2', 'max:2000'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first('message'),
            ], 422);
        }

        $question = trim((string) $request->input('message'));
        $locale = app()->getLocale();

        if ($this->shouldRouteToHuman($question)) {
            return response()->json([
                'answer' => __($this->localeKey('human_request'), [], $locale),
                'show_contact_form' => true,
            ]);
        }

        $answer = $gemini->answer($question, $locale);

        if ($answer === null) {
            return response()->json([
                'answer' => __($this->localeKey('not_found'), [], $locale),
                'show_contact_form' => true,
            ]);
        }

        return response()->json([
            'answer' => $answer,
            'show_contact_form' => false,
        ]);
    }

    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
            'contact_type' => ['required', 'in:email,phone'],
            'contact_value' => ['required', 'string', 'max:255'],
            'consent' => ['accepted'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first(),
            ], 422);
        }

        $contactValue = trim((string) $request->input('contact_value'));

        if ($request->input('contact_type') === 'email' && !filter_var($contactValue, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'message' => __('validation.email', [], app()->getLocale()),
            ], 422);
        }

        if ($request->input('contact_type') === 'phone' && !preg_match('/^[+()\d\s-]{7,20}$/', $contactValue)) {
            return response()->json([
                'message' => __('validation.regex', ['attribute' => 'contact_value'], app()->getLocale()),
            ], 422);
        }

        $chatMessage = ChatMessage::create([
            'name' => trim((string) $request->input('name', '')) ?: null,
            'message' => trim((string) $request->input('message')),
            'contact_type' => $request->input('contact_type'),
            'contact_value' => $contactValue,
            'consent' => true,
            'locale' => app()->getLocale(),
            'status' => 'new',
        ]);

        $notificationEmail = config('chatbot.consultation_notification_email');

        if ($notificationEmail) {
            try {
                Mail::to($notificationEmail)->send(new NewConsultationRequestMail($chatMessage));
            } catch (Throwable $exception) {
                Log::error('Consultation notification email failed.', [
                    'chat_message_id' => $chatMessage->id,
                    'exception' => $exception,
                ]);
            }
        } else {
            Log::warning('Consultation notification email is not configured.', [
                'chat_message_id' => $chatMessage->id,
            ]);
        }

        return response()->json([
            'message' => __($this->localeKey('request_success'), [], app()->getLocale()),
        ]);
    }

    private function shouldRouteToHuman(string $question): bool
    {
        $normalized = strtolower($question);
        $patterns = [
            'operator', 'сотрудник', 'связ', 'сотруднице', 'оператор', 'human', 'person', 'leave a request',
            'оставить заявку', 'мне нужна помощь человека', 'связать с сотрудником', 'связать',
            'Contact', 'employee', 'assistant', 'мне нужен человек', 'человек', 'заявка', 'ask a person'
        ];

        foreach ($patterns as $pattern) {
            if (strpos($normalized, strtolower($pattern)) !== false) {
                return true;
            }
        }

        return false;
    }

    private function localeKey(string $key): string
    {
        return 'chat.' . $key;
    }
}
