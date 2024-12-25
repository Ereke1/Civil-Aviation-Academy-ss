<?php

namespace App\Http\Controllers\Admin\Enrollee;

use App\Http\Controllers\Controller;
use App\Models\Applications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DoctoralController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$years = $request->years;
		$created_at_from = $request->created_at_from;
		$created_at_to = $request->created_at_to;
        $case_number_date_from = $request->case_number_date_from;
        $sort = $request->sort;
		// Filter
		$whereArray = [
			'type' => 'Докторантура',
			'status' => 0,
			'citizen' => $request->citizen,
			'programms' => $request->programms,
			'region' => $request->region,
			'process' => $request->process,
			'surname' => $request->surname
		];
		$whereArray = array_filter($whereArray, 'strlen');

        $query = DB::table('applications')
            ->select('applications.id as applid', 'applications.*', 'nationalities.id', 'nationalities.*')
            ->join('nationalities', 'applications.nationality_id', '=', 'nationalities.id')
            ->where($whereArray);

        if ($request->has('case_number_date_from') && !empty($case_number_date_from)) {
            $query->whereDate('case_number_date', '>=', "$case_number_date_from 00:00:00");
        }
        if ($request->has('created_at_from') && !empty($created_at_from)) {
            $query->whereDate('created_at', '>=', "$created_at_from 00:00:00");
        }
        if ($request->has('created_at_to') && !empty($created_at_to)) {
            $query->whereDate('created_at', '<=', "$created_at_to 00:00:00");
        }
        if ($request->has('sort') && !empty($sort)) {
            if ($sort === 'surname') {
                $query->orderBy($sort, 'asc');
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $data = $query->paginate(100)
            ->appends($whereArray)
            ->appends('created_at_from', $created_at_from)
            ->appends('created_at_to', $created_at_to)
            ->appends('case_number_date_from', $case_number_date_from)
            ->appends(compact('sort'));

        $countData = $query->count();

		// Data
		$dataArr = [
			'data' => $data,
			'citizen' => $request->citizen,
			'programms' => $request->programms,
			'region' => $request->region,
			'years' => $request->years,
			'created_at_from' => $request->created_at_from,
            'created_at_to' => $request->created_at_to,
            'case_number_date_from' => $request->case_number_date_from,
			'process' => $request->process,
			'sort' => $request->sort,
			'countData' => $countData
		];
		return view('admin.enrollee.doctoral', $dataArr);
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
		$data = Applications::find($id);
		$data->status = 1;
		$data->updated_at = \Carbon\Carbon::now('Asia/Almaty');
		$data->save();
		return redirect()->back();
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
		if (Auth::user()->role === '999') {
			return redirect()->back()->with('alert', 'У вас не прав на это действие');
		} else {
			$data = Applications::find($request->id);
			if ($data->process === 'Сдал документы' && $request->process === 'Отказ') {
				$data->process = 'Отказ';
				$data->case_number = NULL;
				$data->save();
				return redirect()->back()->with('alert', 'Процесс изменен и удалён № дела');
			} elseif ($request->process === 'Сдал документы' && $data->case_number === NULL) {
				$data->process = $request->process;
				$findLastCaseNumber = DB::table('applications')
                    ->where(function($query) {
                        $query->where('case_number_date', '>=', "2024-06-01 00:00:00");
                        })
                    ->orderBy('case_number', 'desc')->pluck('case_number')->first();
				$data->case_number = $findLastCaseNumber + 1;
				$data->case_number_date = $today;
				$data->save();
				return redirect()->back()->with('alert', 'Номер дела - ' . $data->case_number);
			} else {
				$data->iin = $request->iin;
                $data->surname = $request->surname;
                $data->name = $request->name;
                $data->patronymic = $request->patronymic;
				$data->lang_edu = $request->lang_edu;
				$data->phone_1 = $request->phone_1;
				$data->phone_2 = $request->phone_2;
				$data->process = $request->process;
				$data->programms = $request->programms;
				$data->save();
				return redirect()->back()->with('alert', 'Корректировка выполнена!');
			}
		}
	}

	public function toDeleted(Request $request)
	{
		$data = Applications::find($request->id);
		$data->status = 1;
		$data->updated_at = \Carbon\Carbon::now('Asia/Almaty');
		$data->save();
		return redirect()->back();
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
