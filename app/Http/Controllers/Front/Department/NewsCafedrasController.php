<?php

namespace App\Http\Controllers\Front\Department;

use App\Http\Controllers\Controller;
use App\Models\Navigation;
use App\Models\Department;
use App\Models\NewsCafedra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class NewsCafedrasController extends Controller
{
	public function index($slug, $department_id)
	{
		$tree = Navigation::tree();
		$department = Department::where('slug', $slug)->first();
		$news = NewsCafedra::where('department_id', $department_id)->orderBy('publish_at', 'desc')->paginate(24);
		return view('front.departments.newsCafedras.index', compact('tree', 'news', 'slug', 'department_id', 'department'));
	}
	public function show($slug, $department_id, $id)
	{
		$tree = Navigation::tree();
		$department = Department::where('slug', $slug)->first();
		$news = NewsCafedra::where('id', $id)->first();
		return view('front.departments.newsCafedras.show', compact('tree', 'news', 'department'));
	}
}
