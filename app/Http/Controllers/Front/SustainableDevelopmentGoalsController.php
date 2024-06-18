<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\SustainableDevelopmentGoal;
use App\Models\SdGoalsInfo;
use App\Models\Navigation;

class SustainableDevelopmentGoalsController extends Controller
{

	public function index()
	{
		$tree = Navigation::tree();
		$goals = SustainableDevelopmentGoal::orderBy('sort', 'asc')->get();
		return view('front.sustainable_development_goals.index', compact('tree', 'goals'));
	}

    public function show($id)
	{
		$tree = Navigation::tree();
		$goal = SustainableDevelopmentGoal::where('id', $id)->first();
		$goalsInfo = SdGoalsInfo::orderBy('id', 'desc')->where('goal_id', $id)->paginate(24);
		return view('front.sustainable_development_goals.show', compact('tree', 'goal', 'goalsInfo'));
	}

}
