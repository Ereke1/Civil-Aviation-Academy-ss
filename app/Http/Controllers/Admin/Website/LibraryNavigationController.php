<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use App\Models\LibraryNavigation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibraryNavigationController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$user_department = LibraryNavigation::userInfo()->department;

        if ($user_department === 'ДМР') {
			$data = LibraryNavigation::where('active', true)->orderBy('title_ru', 'asc')->get();
			$tree = LibraryNavigation::tree();
		}
         else {
			$data = LibraryNavigation::where(['active' => true, 'college' => false])->get();
			$tree = LibraryNavigation::tree();
		}
		return view('admin.website.library_navigation.index', compact('data', 'tree', 'user_department'));
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
		$worker_permission = User::find(Auth::user()->id)->workersPermissions;
		$worker_permission = unserialize($worker_permission->permission);

		if (isset($worker_permission->navigation->create) && $worker_permission->navigation->create == true) {
			$user_department = LibraryNavigation::userInfo()->department;
			$data = new LibraryNavigation;
			$data->title_ru = $request->title_ru;
			$data->title_kk = $request->title_kk;
			$data->title_en = $request->title_en;
			$data->link = $request->link;
			$data->sort = $request->sort;
			$data->parrent_id = $request->parrent_id;
			$data->user_id = Auth::user()->id;
			if ($user_department == 'Авиационный колледж') {
				$data->college = true;
			}
			$data->save();
			return redirect()->back()->with('alert', 'Успешное добавление');
		} else {
			return abort('403', 'У вас нет доступа на это действие');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\LibraryNavigation  $navigation
	 * @return \Illuminate\Http\Response
	 */
	public function show(LibraryNavigation $navigation)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\LibraryNavigation  $navigation
	 * @return \Illuminate\Http\Response
	 */
	public function edit(LibraryNavigation $navigation)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\LibraryNavigation  $navigation
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$worker_permission = User::find(Auth::user()->id)->workersPermissions;
		$worker_permission = unserialize($worker_permission->permission);

		if (isset($worker_permission->navigation->update) && $worker_permission->navigation->update == true) {
			$user_department = LibraryNavigation::userInfo()->department;
			$data = LibraryNavigation::find($id);
			$data->title_ru = $request->title_ru;
			$data->title_kk = $request->title_kk;
			$data->title_en = $request->title_en;
			$data->link = $request->link;
			$data->sort = $request->sort;
			$data->parrent_id = $request->parrent_id;
			$data->active = $request->active;
			$data->user_id = Auth::user()->id;
			if ($user_department == 'Авиационный колледж') {
				$data->college = true;
			}
			$data->save();
			return redirect()->back()->with('alert', 'Успешное добавление');
		} else {
			return abort('403', 'У вас нет доступа на это действие');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\LibraryNavigation  $navigation
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(LibraryNavigation $navigation)
	{
		$worker_permission = User::find(Auth::user()->id)->workersPermissions;
		$worker_permission = unserialize($worker_permission->permission);
		if (isset($worker_permission->navigation->delete) && $worker_permission->navigation->delete == true) {
			LibraryNavigation::where('id', $navigation->id)->delete();
			return redirect()->back();
		} else {
			return abort('403', 'У вас нет доступа на это действие');
		}
	}
}
