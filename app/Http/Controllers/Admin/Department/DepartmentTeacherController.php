<?php

namespace App\Http\Controllers\Admin\Department;

use App\Models\DepartmentTeacher;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentTeacherController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('admin.department.teacher.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$departments = Department::get();
		return view('admin.department.teacher.create', compact('departments'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$now = date_format(now('Asia/Almaty'), 'Ymd');

		$data = new DepartmentTeacher();
		$data->surname = $request->surname;
		$data->name = $request->name;
		$data->patronymic = $request->patronymic;
		$data->position = $request->position;
		$data->parrent_id = $request->department;
		$data->position = $request->position;


		$image = $request->file('photo');
		$image_name = $now . $image->getClientOriginalName();
		$destinationPath = public_path('/assets/images/department/teachers/');
		$image->move($destinationPath, $image_name);
		$data->photo = '/assets/images/department/teachers/' . $image_name;

		$data->phone = $request->phone;
		$data->email = $request->email;
		$data->information = $request->information;
		$data->save();

		return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\DepartmentTeacher  $departmentTeacher
	 * @return \Illuminate\Http\Response
	 */
	public function show(DepartmentTeacher $departmentTeacher)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\DepartmentTeacher  $departmentTeacher
	 * @return \Illuminate\Http\Response
	 */
	public function edit(DepartmentTeacher $departmentTeacher)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\DepartmentTeacher  $departmentTeacher
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, DepartmentTeacher $departmentTeacher)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\DepartmentTeacher  $departmentTeacher
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(DepartmentTeacher $departmentTeacher)
	{
		//
	}
}
