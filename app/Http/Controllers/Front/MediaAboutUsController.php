<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Navigation;
use App\Models\MediaAboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MediaAboutUsController extends Controller
{
	public function index()
	{
		$tree = Navigation::tree();
		$data = MediaAboutUs::orderBy('id', 'desc')->get();
		return view('front.media_about_us.index', compact('tree', 'data'));
	}
	public function show()
	{
		$tree = Navigation::tree();
		$data = MediaAboutUs::get();
		return view('front.media_about_us.show', compact('tree', 'data', 'more_images'));
	}
}
