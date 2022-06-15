<?php

namespace App\Http\Controllers\Admin\Graduate;

use App\Http\Controllers\Controller;
use App\Models\Graduate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GraduateController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$whereArray = [
			'form_study' => $request->form_study,
			'surname' => $request->surname,
			'region' => $request->region,
			'reference' => $request->reference,
			'resume' => $request->resume,
			'magister' => $request->magister,
			'direction' => $request->direction,
			'work' => $request->work,
			'unification' => $request->unification,
			'process' => $request->process
		];
		$whereArray = array_filter($whereArray, 'strlen');

		$data = Graduate::where($whereArray)
			->paginate(100)
			->appends($whereArray);

		$countData = Graduate::where($whereArray)
			->count();

		$dataArray = [
			'data' => $data,
			'form_study' => $request->form_study,
			'region' => $request->region,
			'magister' => $request->magister,
			'reference' => $request->reference,
			'resume' => $request->resume,
			'direction' => $request->direction,
			'unification' => $request->unification,
			'work' => $request->work,
			'process' => $request->process,
			'countData' => $countData
		];
		return view('admin.graduate.index', $dataArray);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.graduate.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$data = new Graduate;
		$data->surname = $request->surname;
		$data->name = $request->name;
		$data->patronymic = $request->patronymic;
		$data->groupe = $request->groupe;
		$data->unification = $request->unification;
		$data->gpa = $request->gpa;
		$data->iin = $request->iin;
		$data->form_study = $request->form_study;
		$data->reg_address = $request->reg_address;
		$data->res_address = $request->res_address;
		$data->region = $request->region;
		$data->speciality = $request->speciality;
		$data->magister = $request->magister;
		$data->work = $request->work;
		if ($request->work === 0 || $request->work === NULL) {
			$data->work_place = NULL;
		} else {
			$data->work_place = $request->work_place;
		}
		$data->reference = $request->reference;
		$data->resume = $request->resume;
		$data->document = $request->document;
		$data->direction = $request->direction;
		$data->direction_place1 = $request->directionPlace1;
		$data->direction_place2 = $request->directionPlace2;
		$data->direction_place3 = $request->directionPlace3;
		$data->phone = $request->phone;
		$data->graduation_year = $request->graduation_year;
		$data->quarter = $request->quarter;
		$data->process = $request->process;
		$data->save();
		return redirect()->route('admin.graduate.index')->with('alert', 'Выпускник ' . $request->surname . ' ' . $request->name . ' добавлен');
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
		//
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
		$data = Graduate::find($id);
		$data->reg_address = $request->reg_address;
		$data->res_address = $request->res_address;
		$data->region = $request->region;
		$data->unification = $request->unification;
		$data->reference = $request->reference;
		$data->resume = $request->resume;
		$data->work = $request->work;
		if ($request->work === 0 || $request->work === NULL) {
			$data->work_place = NULL;
		} else {
			$data->work_place = $request->work_place;
		}
		$data->direction = $request->direction;
		$data->direction_place1 = $request->directionPlace1;
		$data->direction_place2 = $request->directionPlace2;
		$data->direction_place3 = $request->directionPlace3;
		$data->document = $request->document;
		$data->gpa = $request->gpa;
		$data->graduation_year = $request->graduation_year;
		$data->quarter = $request->quarter;
		$data->phone = $request->phone;
		$data->magister = $request->magister;
		$data->process = $request->process;
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
		$data = Graduate::find($id);
		$data->delete();
		return redirect()->back()->with('alert', 'Выпускник успешно удалён');
	}
}
