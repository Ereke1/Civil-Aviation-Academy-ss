<?php

namespace App\Http\Controllers\Admin\Enrollee;

use App\Http\Controllers\Controller;
use App\Models\RegistrationForTesting;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Mail\InterviewScheduledMail;
use Illuminate\Support\Facades\Mail;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;


class OnlineRegForTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $availableDates = [
            "2025-07-07",
            "2025-07-08",
            "2025-07-10",
            "2025-07-11",
            "2025-07-15",
            "2025-07-16",
        ];
        $availableInterviewDates = [
            "2025-07-09",
            "2025-07-14",
            "2025-07-17",
        ];
        $timeSlotsTest = [
            "09:00-10:00","10:30-11:30","12:00-13:00",
            "13:30-14:30",
        ];
        $timeSlotsInterview = [
            "09:00-10:00","10:30-11:30","12:00-13:00",
            "13:30-14:30","15:00-16:00",
        ];

        // Filter
        $whereArray = [
            'is_confirmed' => 1,
            'is_deleted' => 0,
        ];

        $query = RegistrationForTesting::query()
        ->where($whereArray)
        ->orderBy('updated_at', 'desc');

        // ↓↓↓ Фильтрация ↓↓↓

        // По наличию IELTS (1 или 0)
        if ($request->filled('have_ielts')) {
            $query->where('have_ielts', $request->have_ielts);
        }

        // По статусу прохождения теста ("Да" / "Нет")
        if ($request->filled('test_passed')) {
            $query->where('test_passed', $request->test_passed);
        }

        // По статусу прохождения интервью ("Да" / "Нет")
        if ($request->filled('interview_passed')) {
            $query->where('interview_passed', $request->interview_passed);
        }

        // По дате теста (игнорируем время)
        if ($request->filled('test_date')) {
            $query->whereDate('test_date', $request->test_date);
        }

        // По дате интервью
        if ($request->filled('interview_date')) {
            $query->whereDate('interview_date', $request->interview_date);
        }

        // По фамилии (частичный поиск)
        if ($request->filled('surname')) {
            $query->where('surname', 'like', '%'.$request->surname.'%');
        }

        // ↑↑↑ Конец блока фильтрации ↑↑↑

        // Параметры пагинации и подсчёта
        $countData = $query->count();

        $data = $query
            ->paginate(100)
            ->appends($request->only([
                'have_ielts',
                'test_passed',
                'interview_passed',
                'test_date',
                'interview_date',
                'surname',
            ]));

        return view('admin.enrollee.onlineRegForTest', [
            'data'                   => $data,
            'countData'              => $countData,
            'have_ielts'             => $request->have_ielts,
            'test_passed'            => $request->test_passed,
            'interview_passed'       => $request->interview_passed,
            'test_date'              => $request->test_date,
            'interview_date'         => $request->interview_date,
            'surname'                => $request->surname,
            // плюс ваши переменные для слотов и дат
            'availableDates'         => $availableDates,
            'availableInterviewDates'=> $availableInterviewDates,
            'timeSlotsTest'          => $timeSlotsTest,
            'timeSlotsInterview'     => $timeSlotsInterview,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = RegistrationForTesting::find($id);
        $data->is_deleted = 1;
        $data->updated_at = \Carbon\Carbon::now('Asia/Almaty');
        $data->save();
        return redirect()->back()->with('alert', 'Запись удалена!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $today = Carbon::today();

        $data = RegistrationForTesting::findOrFail($id);

        $data->surname = $request->surname;
        $data->name = $request->name;
        $data->patronymic = $request->patronymic;
        $data->phone = $request->phone;

        $data->test_score = $request->test_score;
        $data->test_passed = $request->test_passed;
        $data->interview_passed = $request->interview_passed;

        $data->interview_date = $request->interview_date;
        $data->interview_time_slot = $request->interview_time_slot;
        $data->test_date = $request->test_date;
        $data->test_time_slot = $request->test_time_slot;

        if (
            !$data->have_ielts &&
            $data->test_score >= 45 &&
            $data->test_passed === 'Да' &&
            (empty($request->interview_date) || empty($request->interview_time_slot))
        ) {
            $availableInterviewDates = [
                "2025-07-09",
                "2025-07-14",
                "2025-07-17",
            ];

            $interviewSlots = [
                "09:00-10:00",
                "10:30-11:30",
                "12:00-13:00",
                "13:30-14:30",
                "15:00-16:00",
            ];
            $slotFound = false;
            foreach ($availableInterviewDates as $date) {
                foreach ($interviewSlots as $slot) {
                    $count = RegistrationForTesting::where('interview_date', $date)
                    ->where('interview_time_slot', $slot)
                    ->where('is_deleted', 0)
                    ->where('is_confirmed', 1)
                    ->count();

                    if ($count < 18) {
                        $data->interview_date = $date;
                        $data->interview_time_slot = $slot;
                        $slotFound = true;
                        break 2;
                    }
                }
            }

            // if (!$data->interview_date || !$data->interview_time_slot) {
            //     return redirect()->back()->with('error', 'Свободных слотов для интервью не найдено.');
            // }
            if (!$slotFound) {
                return redirect()->back()->with('alert', 'Все слоты на интервью заняты. Пожалуйста, попробуйте позже или освободите место.');
            }
        }

        $data->save();

        return redirect()->back()->with('alert', 'Данные изменены!');
    }

    public function sendMessage($id)
    {
        $reg = RegistrationForTesting::findOrFail($id);

        // Проверим, что у студента есть утверждённая дата интервью
        if (! $reg->interview_date || ! $reg->interview_time_slot) {
            return redirect()->back()->with('error', 'У этого студента не назначено интервью.');
        }

        // Шлём письмо
        Mail::to($reg->email)
            ->send(new InterviewScheduledMail($reg));

        return redirect()->back()->with('alert', 'Письмо с датой интервью отправлено.');
    }

    public function export(Request $request)
    {
        // Отладка — чтобы увидеть, что мы сюда попали
        // dd('export called', $request->all());

        $fileName = 'students_' . now()->format('Ymd_His') . '.xlsx';
        return Excel::download(
            new StudentsExport($request),
            $fileName
        );
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
