<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use App\Models\NewsCafedra;
use App\Models\Department;
use App\Models\User;
use App\Models\Page;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsCafedrasController extends Controller
{
	public function __construct()
	{
		/* $user_id = User::find(Auth::user()->id)->permissions->permission;
		$unserialize = unserialize($user_id);

		if($unserialize->news_cafedras->read == true){
			return abort('403', 'Доступ разрешён');
		}
		else{
			return abort('403', 'Доступ запрещён');
		} */
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$user_department = Page::userInfo()->department;

        if ($user_department === 'ДМР') {
		    $news_cafedras = Department::join('news_cafedras', 'departments.id', 'news_cafedras.department_id')
			->select(
				'news_cafedras.id',
				'departments.name as department_name',
				'news_cafedras.title_ru',
				'news_cafedras.created_at',
			)
			->orderBy('news_cafedras.id', 'desc')
			->get();
        } else {
		    $news_cafedras = Department::join('news_cafedras', 'departments.id', 'news_cafedras.department_id')
            ->where('news_cafedras.user_id', Auth::user()->id)
			->select(
				'news_cafedras.id',
				'departments.name as department_name',
				'news_cafedras.title_ru',
				'news_cafedras.created_at',
			)
			->orderBy('news_cafedras.id', 'desc')
			->get();
        }

		return view('admin.website.news_cafedras.index', compact('news_cafedras'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
        $departments = Department::all();
		return view('admin.website.news_cafedras.create', compact('departments'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
        // Validate Background Images
			$request->validate([
				'bg_image' => 'image|mimes:jpeg,png,jpg,gif,pdf,jfif',
			]);

		$user = User::find(Auth::user()->id)->workersInfo;
		$news_cafedras_id = NewsCafedra::orderBy('id', 'desc')->first();
		if (empty($news_cafedras_id)) {
			$news_cafedras_id = 1;
		} else {
			$news_cafedras_id = NewsCafedra::orderBy('id', 'desc')->first();
			$news_cafedras_id = $news_cafedras_id->id;
		}
		$data = new NewsCafedra();


        $now = date_format(now('Asia/Almaty'), 'Ymd');
		$folder = public_path('/storage/NewsCafedra/');

        // Background Images
        $bg_image = $request->file('bg_image');
		if (!empty($bg_image)) {
			$bg_image_name = $now . $bg_image->getClientOriginalName();
			$bg_image = Image::make($bg_image);
			$bg_image->save($folder . $bg_image_name, 40);
		}

		// Сохраняём в базу
		$data->user_id = $user->user_id;
		$data->title_ru = $request->title_ru;
		$data->title_kk = $request->title_kk;
		$data->title_en = $request->title_en;
		$data->description_ru = $request->description_ru;
		$data->description_kk = $request->description_kk;
		$data->description_en = $request->description_en;
		$data->bg_image = $bg_image_name;
		$data->publish_at = $request->publish_at;
		$data->department_id = $request->department_id;

		$data->save();

		return redirect()->route('admin.website.news_cafedras.index')->with('alert', 'Пост успешно создан!');
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
		$news_cafedras = NewsCafedra::find($id);
		$departments = Department::all();
		return view('admin.website.news_cafedras.edit', compact('news_cafedras','departments'));
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
		// For generate name images ...
		$now = date_format(now('Asia/Almaty'), 'Ymd');
		$folder = public_path('/storage/NewsCafedra/');

        // Validate Background Images
        $request->validate([
            'bg_image' => 'image|mimes:jpeg,png,jpg,gif,pdf,jfif',
        ]);;

		$news_cafedras = NewsCafedra::find($id);
        // Delete Bg Images
		$oldBgImage = $news_cafedras->bg_image;
        $bg_image_name = $oldBgImage;


        $bg_image = $request->file('bg_image');
		if (!empty($bg_image)) {
            if ($oldBgImage === $bg_image) {
                File::delete(public_path('/storage/NewsCafedra/' . $oldBgImage));
            }
		    $bg_image_name = $now . $bg_image->getClientOriginalName();
			$bg_image = Image::make($bg_image);
			$bg_image->save($folder . $bg_image_name, 40);
		}


		$news_cafedras->title_ru = $request->title_ru;
		$news_cafedras->title_kk = $request->title_kk;
		$news_cafedras->title_en = $request->title_en;
		$news_cafedras->description_ru = $request->description_ru;
		$news_cafedras->description_kk = $request->description_kk;
		$news_cafedras->description_en = $request->description_en;
		$news_cafedras->bg_image = $bg_image_name;
		$news_cafedras->publish_at = $request->publish_at;
		$news_cafedras->department_id = $request->department_id;
		$news_cafedras->save();

		return redirect()->route('admin.website.news_cafedras.index')->with('alert', 'Пост успешно изменен!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$news_cafedras = NewsCafedra::find($id);
		$news_cafedras->delete();
		return redirect()->back()->with('alert', 'Пост успешно удален!');
	}
}
