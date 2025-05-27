<?php

namespace App\Http\Controllers\Admin\Enrollee;

use App\Http\Controllers\Controller;
use App\Models\RegistrationForTesting;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $test_date = $request->test_date;


        // Filter
        $whereArray = [
            'is_confirmed' => 1,
            'is_deleted' => 0,
        ];

        $data = RegistrationForTesting::select('*')
            ->where($whereArray)
            ->orderBy('updated_at', 'desc');

        // if ($request->has('test_date') && !empty($test_date)) {
        //     $data->whereDate('test_date', '=', $test_date);
        // }


        // Count
        $countData = $data->count();

        $data = $data->paginate(100)
            ->appends($whereArray)
            ->appends('test_date', $test_date);

        // Data
        $dataArr = [
            'test_date' => $request->test_date,
            'have_ielts' => $request->have_ielts,
            'interview_date' => $request->interview_date,
            'data' => $data,
            'countData' => $countData,
        ];
        return view('admin.enrollee.onlineRegForTest', $dataArr, compact(
            'availableDates',
            'timeSlotsTest',
            'timeSlotsInterview',
            'availableInterviewDates',
        ));
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
    public function show($id)
    {
        //
    }

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
    // public function update(Request $request, $id)
    // {
    //     $today = Carbon::today();

    //     $data = RegistrationForTesting::find($id);

    //     $data->surname = $request->surname;
    //     $data->name = $request->name;
    //     $data->patronymic = $request->patronymic;
    //     $data->phone = $request->phone;

    //     $data->test_score = $request->test_score;
    //     $data->test_passed = $request->test_passed;
    //     $data->interview_passed = $request->interview_passed;

    //     $data->interview_date = $request->interview_date;
    //     $data->interview_time_slot = $request->interview_time_slot;
    //     $data->test_date = $request->test_date;
    //     $data->test_time_slot = $request->test_time_slot;

    //     $data->save();
    //     return redirect()->back()->with('alert', 'Данные изменены!');
    // }

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

        $data->test_date = $request->test_date;
        $data->test_time_slot = $request->test_time_slot;


        $data->interview_date = $request->interview_date;
        $data->interview_time_slot = $request->interview_time_slot;


        if (
            !$data->have_ielts &&
            $data->test_score >= 45 &&
            $data->test_passed === 'Да' &&
            (empty($request->interview_date) || empty($request->interview_time_slot))
        ) {
            $availableInterviewDates = [
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

            foreach ($availableInterviewDates as $date) {
                foreach ($interviewSlots as $slot) {
                    $count = RegistrationForTesting::where('interview_date', $date)
                        ->where('interview_time_slot', $slot)
                        ->count();

                    if ($count < 18) {
                        $data->interview_date = $date;
                        $data->interview_time_slot = $slot;
                        break 2;
                    }
                }
            }

            if (!$data->interview_date || !$data->interview_time_slot) {
                return redirect()->back()->with('error', 'Свободных слотов для интервью не найдено.');
            }
        }

        $data->save();

        return redirect()->back()->with('alert', 'Данные изменены!');
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
