<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Navigation;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class NewsController extends Controller
{
	public function index()
	{
		$tree = Navigation::tree();
		$data = News::where('compliance', 0)->orderBy('publish_at', 'desc')->take(36)->get();
		return view('front.news.index', compact('tree', 'data'));
	}
	public function show($slug)
	{
		$tree = Navigation::tree();
		$data = News::where('compliance', 0)->where('slug', $slug)->first();
		if(isset($data->more_images)){
			$more_images = unserialize($data->more_images);
		}
		return view('front.news.show', compact('tree', 'data', 'more_images'));
	}
}
