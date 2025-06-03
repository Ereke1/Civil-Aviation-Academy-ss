<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Navigation;


class VacancyController extends Controller

{
    public function index()
    {

		$tree = Navigation::tree();
        return view('front.vacant_vacancies.index', compact('tree'));
    }
}



