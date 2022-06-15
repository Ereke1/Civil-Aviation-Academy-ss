<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use App\Models\Navigation;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$user_department = Page::userInfo()->department;
		if ($user_department === 'Авиационный колледж') {
			$data = Page::select('*')->where('user_id', 13)->get();
		} else {
			$data = Page::select('*')->where('user_id', '!=', 13)->get();
		}
		return view('admin.website.pages.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.website.pages.create');
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
		if (isset($worker_permission->pages->create) && $worker_permission->pages->create == true) {
			$data = new Page;
			$lastID = Page::orderBy('id', 'desc')->pluck('id')->first();
			$lastID = $lastID + 1;
			$slug = SlugService::createSlug(Page::class, 'slug', $request->title_ru . '_' . $lastID);
			$data->title_ru = $request->title_ru;
			$data->title_kk = $request->title_kk;
			$data->title_en = $request->title_en;
			$data->desc_ru = $request->desc_ru;
			$data->desc_kk = $request->desc_kk;
			$data->desc_en = $request->desc_en;
			$data->slug = $slug;
			$data->user_id = Auth::user()->id;
			$data->save();
			return redirect()->route('admin.website.pages.index')->with('alert', 'Страница успешно добавлена');
		} else {
			return abort('403', 'У вас нет доступа на это действие');
		}
	}

	public function upload(Request $request)
	{
		if ($request->hasFile('upload')) {
			$originName = $request->file('upload')->getClientOriginalName();
			$fileName = pathinfo($originName, PATHINFO_FILENAME);
			$extension = $request->file('upload')->getClientOriginalExtension();
			$fileName = $fileName . '_' . time() . '.' . $extension;

			$request->file('upload')->move(public_path('assets/images/upload'), $fileName);

			$CKEditorFuncNum = $request->input('CKEditorFuncNum');
			$url = asset('assets/images/upload/' . $fileName);
			$msg = 'Image uploaded successfully';
			$response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

			@header('Content-type: text/html; charset=utf-8');
			echo $response;
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Page  $page
	 * @return \Illuminate\Http\Response
	 */
	public function show($page)
	{
		$tree = Navigation::tree();
		$data = Page::where('slug', $page)->first();
		return view('page', compact('tree', 'data'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Page  $page
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$data = Page::find($id);
		return view('admin.website.pages.edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Page  $page
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$worker_permission = User::find(Auth::user()->id)->workersPermissions;
		$worker_permission = unserialize($worker_permission->permission);
		if (isset($worker_permission->pages->update) && $worker_permission->pages->update == true) {
			$data = Page::find($id);
			$data->title_ru = $request->title_ru;
			$data->title_kk = $request->title_kk;
			$data->title_en = $request->title_en;
			$data->desc_ru = $request->desc_ru;
			$data->desc_kk = $request->desc_kk;
			$data->desc_en = $request->desc_en;
			$data->user_id = Auth::user()->id;
			$data->save();
			return redirect()->back()->with('alert', 'Изменения успешно сохранены');
		} else {
			return abort('403', 'У вас нет доступа на это действие');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Page  $page
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$worker_permission = User::find(Auth::user()->id)->workersPermissions;
		$worker_permission = unserialize($worker_permission->permission);
		if (isset($worker_permission->pages->delete) && $worker_permission->pages->delete == true) {
			$data = Page::find($id);
			$data->delete();
			return redirect()->back()->with('alert', 'Страница удалена');
		} else {
			return abort('403', 'У вас нет доступа на это действие');
		}
	}
}
