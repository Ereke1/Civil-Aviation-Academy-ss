<?php

namespace App\Exports;

use Illuminate\Http\Request;
use App\Models\Applications;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class StudentsDocumentExport implements FromQuery, WithHeadings, WithMapping, WithColumnWidths
{
    /** @var Request */
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function query()
    {
        $r = $this->request;

        $query = Applications::query()
            ->where('type', 'Бакалавриат');
        if ($r->filled('created_at_from') && $r->filled('created_at_to')) {
            $query->whereBetween('created_at', [
                $r->created_at_from,
                $r->created_at_to
            ]);
        }
        if ($r->filled('base')) {
            $query->where('base', $r->base);
        }
        if ($r->filled('haveAltyn')) {
            $query->where('haveAltyn', $r->haveAltyn);
        }
        if ($r->filled('haveENT')) {
            $query->where('haveENT', $r->haveENT);
        }
        if ($r->filled('countENT')) {
            $query->where('countENT', '>=', $r->countENT)
                  ->where('countENT', '<=', 140);
        }
        if ($r->filled('quota')) {
            $query->where('quota', $r->quota);
        }
        if ($r->filled('lang_edu')) {
            $query->where('lang_edu', $r->lang_edu);
        }
        if ($r->filled('citizen')) {
            $query->where('citizen', $r->citizen);
        }
        if ($r->filled('programms')) {
            $query->where('programms', $r->programms);
        }
        if ($r->filled('region')) {
            $query->where('region', $r->region);
        }
        if ($r->filled('haveVLEK')) {
            $query->where('haveVLEK', $r->haveVLEK);
        }
        if ($r->filled('haveIELTS')) {
            $query->where('haveIELTS', $r->haveIELTS);
        }
        if ($r->filled('process')) {
            $query->where('process', $r->process);
        }
        if ($r->filled('surname')) {
            $query->where('surname', 'like', '%'.$r->surname.'%');
        }
        if ($r->filled('have_grant')) {
            $query->where('have_grant', $r->have_grant);
        }

        return $query->orderBy('created_at', 'desc');
    }

    public function headings(): array
    {
        return [
            'ID','Фамилия','Имя','Отчество','Email','Телефон',
            'На Основании','Процесс','Гражданство','Регион', 'Образовательная программа', 'Язык обучения', 'Алтын белги','ЕНТ', 'ЕНТ балл','Пройден ВЛЭК',
            'Имеется IELTS/TOEFL','Квота', 'Дата', 'Грант'
        ];
    }

    public function map($student): array
    {
        return [
            $student->id,
            $student->surname ?? '',
            $student->name ?? '',
            $student->patronymic ?? '',
            $student->email ?? '',
            $student->phone_1 ?? '',
            $student->base ?? '',
            $student->process ?? '',
            $student->citizen ?? '',
            $student->region ?? '',
            $student->programms ?? '',
            $student->lang_edu ?? '',
            ($student->haveAltyn === 'Да') ? 'Да' : 'Нет',
            ($student->haveENT === 'Да') ? 'Да' : 'Нет',
            $student->countENT ?? '',
            ($student->haveVLEK === 'Да') ? 'Да' : 'Нет',
            ($student->haveIELTS=== 'Да') ? 'Да' : 'Нет',
            $student->quota ?? '',
            $student->created_at,
            ($student->have_grant === 1) ? 'Да' : 'Нет',
            // ? $student->created_at_from->format('Y-m-d H:i:s') : ''
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 6,   // ID
            'B' => 15,  // Фамилия
            'C' => 15,  // Имя
            'D' => 15,  // Отчество
            'E' => 25,  // Email
            'F' => 18,  // Телефон
            'G' => 18,  // На базе
            'H' => 14,  // Процесс
            'I' => 14,  // Гражданство
            'J' => 14,  // Регион
            'K' => 25,  // Образовательная программа
            'L' => 25,
            'M' => 14,  // Алтын белги
            'N' => 8,  // ЕНТ
            'O' => 14,  // ЕНТ балл
            'P' => 14,  // Пройден ВЛЭК
            'Q' => 14,  // Имеется IELTS/TOEFL
            'R' => 20,  // Квота
            // 'R' => 14,  // Регион
            // 'S' => 25,  // Образовательная программа
            // 'T' => 8,  // Алтын белги
            // 'U' => 8,  // ЕНТ
            // 'V' => 8,  // ЕНТ балл
        ];
    }
}
