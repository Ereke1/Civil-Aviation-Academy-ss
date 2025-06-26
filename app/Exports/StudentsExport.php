<?php

namespace App\Exports;

use Illuminate\Http\Request;
use App\Models\RegistrationForTesting;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class StudentsExport implements FromQuery, WithHeadings, WithMapping, WithColumnWidths
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

        $query = RegistrationForTesting::query()
            ->where('is_confirmed', 1)
            ->where('is_deleted', 0);

        if ($r->filled('have_ielts')) {
            $query->where('have_ielts', $r->have_ielts);
        }
        if ($r->filled('test_passed')) {
            $query->where('test_passed', $r->test_passed);
        }
        if ($r->filled('interview_passed')) {
            $query->where('interview_passed', $r->interview_passed);
        }
        if ($r->filled('test_date')) {
            $query->whereDate('test_date', $r->test_date);
        }
        if ($r->filled('interview_date')) {
            $query->whereDate('interview_date', $r->interview_date);
        }
        if ($r->filled('surname')) {
            $query->where('surname', 'like', '%'.$r->surname.'%');
        }

        return $query->orderBy('updated_at', 'desc');
    }

    public function headings(): array
    {
        return [
            'ID','Фамилия','Имя','Отчество','Email','Телефон',
            'IELTS?','Дата теста','Время теста','Тест пройден',
            'Дата интервью','Время интервью','Интервью пройдено','Дата регистрации',
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
            $student->phone ?? '',
            $student->have_ielts ? 'Да' : 'Нет',
            $student->test_date ?? '',
            $student->test_time_slot ?? '',
            $student->test_passed ?? '',
            $student->interview_date ?? '',
            $student->interview_time_slot ?? '',
            $student->interview_passed ?? '',
            $student->created_at ? $student->created_at->format('Y-m-d H:i:s') : '',
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
            'G' => 10,  // IELTS?
            'H' => 14,  // Дата теста
            'I' => 14,  // Время теста
            'J' => 14,  // Тест пройден
            'K' => 18,  // Дата интервью
            'L' => 18,  // Время интервью
            'M' => 14,  // Интервью пройдено
            'N' => 20,  // Дата регистрации
        ];
    }
}
