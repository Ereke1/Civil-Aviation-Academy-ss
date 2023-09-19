<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Navigation;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$tree = Navigation::tree();
		$news = News::where('compliance', 0)->orderBy('publish_at', 'desc')->take(6)->get();
		$events = Event::orderBy('publish_at', 'desc')->take(4)->get();
		//return view('front.index', compact('tree', 'news', 'events'));
		$myvar = "<script> localStorage.getItem('welcomInfo')</script>";

        //return view('front.index', compact('tree', 'news', 'events'));
		// if(isset($_COOKIE['welcomeAGA'])){
		 	return view('front.index', compact('tree', 'news', 'events'));
		//  }else{
		//  	setcookie('welcomeAGA', 'yes', time() + (86400 * 15), "/");
		//  	return view('welcome', compact('tree', 'news', 'events'));
        //     return view('front.index', compact('tree', 'news', 'events'));
		//  }
	}
}
