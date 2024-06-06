<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use App\Models\TrainingCenter;
use App\Models\TrainingCourse;
use App\Models\TrainingType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrainingСoursesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$userDepartment = User::find(Auth::user()->id)->workersInfo->department;
        $training_courses = DB::table('training_courses')
                ->select('training_courses.id', 'training_courses.title_ru as training_course', 'training_centers.name_ru as training_center', 'training_types.name_ru as training_type')
                ->join('training_centers', 'training_centers.id', '=', 'training_courses.training_center_id')
                ->join('training_types', 'training_types.id', '=', 'training_courses.training_type_id')
                ->get();
		return view('admin.website.training_courses.index', compact('training_courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$training_centers = TrainingCenter::get();
		$training_types = TrainingType::get();
		return view('admin.website.training_courses.create', compact('training_centers','training_types'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$user = User::find(Auth::user()->id)->workersInfo;
		$training_course_id = TrainingCourse::orderBy('id', 'desc')->first();
		if (empty($training_course_id)) {
			$training_course_id = 1;
		} else {
			$training_course_id = TrainingCourse::orderBy('id', 'desc')->first();
			$training_course_id = $training_course_id->id;
		}
		$data = new TrainingCourse();

       	// Сохраняём в базу
		$data->user_id = $user->user_id;
		$data->title_ru = $request->title_ru;
		$data->title_kk = $request->title_kk;
		$data->title_en = $request->title_en;
		$data->desc_ru = $request->desc_ru;
		$data->desc_kk = $request->desc_kk;
		$data->desc_en = $request->desc_en;
		$data->training_center_id = $request->training_center_id;
		$data->training_type_id = $request->training_type_id;
		$data->duration_hours = $request->duration_hours;
		$data->duration_days = $request->duration_days;
		$data->price = $request->price;
		$data->start_date = $request->start_date;
		$data->end_date = $request->end_date;

		$data->save();

		return redirect()->route('admin.website.training_courses.index')->with('alert', 'Пост успешно создан!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\TrainingCourse  $TrainingCourse
	 * @return \Illuminate\Http\Response
	 */
	public function show(TrainingCourse $TrainingCourse)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\TrainingCourse  $TrainingCourse
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$training_courses = TrainingCourse::find($id);
		$training_centers = TrainingCenter::get();
		$training_types = TrainingType::get();
		return view('admin.website.training_courses.edit', compact('training_courses', 'training_centers','training_types'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\TrainingCourse  $TrainingCourse
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$TrainingCourse = TrainingCourse::find($id);

		// Сохраняём в базу
		$TrainingCourse->title_ru = $request->title_ru;
		$TrainingCourse->title_kk = $request->title_kk;
		$TrainingCourse->title_en = $request->title_en;
		$TrainingCourse->desc_ru = $request->desc_ru;
		$TrainingCourse->desc_kk = $request->desc_kk;
		$TrainingCourse->desc_en = $request->desc_en;
		$TrainingCourse->training_center_id = $request->training_center_id;
		$TrainingCourse->training_type_id = $request->training_type_id;
		$TrainingCourse->duration_hours = $request->duration_hours;
		$TrainingCourse->duration_days = $request->duration_days;
		$TrainingCourse->price = $request->price;
		$TrainingCourse->start_date = $request->start_date;
		$TrainingCourse->end_date = $request->end_date;
		$TrainingCourse->save();

		return redirect()->route('admin.website.training_courses.index')->with('alert', 'Событие успешно изменено!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\TrainingCourse  $TrainingCourse
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$training_courses = TrainingCourse::find($id);
		$training_courses->delete();
		return redirect()->back()->with('alert', 'Событие успешно удалено!');
	}
}
