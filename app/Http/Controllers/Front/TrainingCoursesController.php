<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Navigation;
use App\Models\TrainingCourse;
use App\Models\TrainingCenter;
use App\Models\TrainingType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class TrainingCoursesController extends Controller
{
    public function index(Request $request)
    {
        $tree = Navigation::tree();
        $training_centers = TrainingCenter::get();
        $training_types = TrainingType::get();


        $whereArray = [
            'training_courses.training_center_id' => $request->filter_training_center_id,
            'training_courses.training_type_id' => $request->filter_training_type_id
        ];
        $whereArray = array_filter($whereArray, 'strlen');
        $training_courses = DB::table('training_courses')
            ->select('training_courses.*', 'training_types.name_ru as training_type_name_ru', 'training_types.name_kz as training_type_name_kk', 'training_types.name_en as training_type_name_en')
            ->join('training_types', 'training_types.id', '=', 'training_courses.training_type_id')
            ->orderBy('training_courses.id', 'desc')
            ->where($whereArray);

        // Добавление условий для даты
        if ($request->has('filter_from_date') && !empty($request->filter_from_date)) {
            $training_courses->whereDate('training_courses.start_date', '>=', $request->filter_from_date);
        }

        if ($request->has('filter_to_date') && !empty($request->filter_to_date)) {
            $training_courses->whereDate('training_courses.end_date', '<=', $request->filter_to_date);
        }

        // Выполнение запроса с пагинацией и добавлением фильтров к URL
        $training_courses = $training_courses->paginate(1000)->appends($request->all());

        $dataArr = [
            'training_courses' => $training_courses,
            'tree' => $tree,
            'training_centers' => $training_centers,
            'training_types' => $training_types,
            'filter_training_center_id' => $request->filter_training_center_id,
            'filter_training_type_id' => $request->filter_training_type_id,
            'filter_from_date' => $request->filter_from_date,
            'filter_to_date' => $request->filter_to_date
        ];

        return view('front.training_courses.index', $dataArr);
    }
}
