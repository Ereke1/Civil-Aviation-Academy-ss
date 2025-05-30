<?php


namespace App\Exports;

use Illuminate\Http\Request;
use App\Models\RegistrationForTesting;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromQuery, WithHeadings
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
            ->where('is_deleted',   0);

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

        return $query->orderBy('updated_at','desc');
    }

    public function headings(): array
    {
        return [
            'ID','Фамилия','Имя','Отчество','Email','Телефон',
            'IELTS?','Дата теста','Время теста','Тест пройден',
            'Дата интервью','Время интервью','Интервью пройдено','Дата регистрации',
        ];
    }
}


