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
        
        $test_date = $request->test_date;
        // Filter
        $whereArray = [
            'is_confirmed' => 1,
            'is_deleted' => 0,
        ];

        $data = RegistrationForTesting::select('*')
            ->where($whereArray)
            ->orderBy('updated_at', 'desc');

        if ($request->has('test_date') && !empty($test_date)) {
            $data->whereDate('test_date', '=', $test_date);
        }

        
        // Count
        $countData = $data->count();

        $data = $data->paginate(100)
            ->appends($whereArray)
            ->appends('test_date', $test_date);

        // Data
        $dataArr = [
            'test_date' => $request->test_date,
            'data' => $data,
            'countData' => $countData
        ];
        return view('admin.enrollee.onlineRegForTest', $dataArr);
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
    public function update(Request $request, $id)
    {
        $today = Carbon::today();

        $data = RegistrationForTesting::find($id);

        $data->surname = $request->surname;
        $data->name = $request->name;
        $data->patronymic = $request->patronymic;
        $data->phone = $request->phone;
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
