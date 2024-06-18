<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\DepartmentPages;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\SustainableDevelopmentGoal;
use App\Models\SdGoalsInfo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class SustainableDevelopmentGoalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $goalsInfo = SdGoalsInfo::join('sustainable_development_goals', 'sd_goals_infos.goal_id ', 'sustainable_development_goals.id')
        // ->select(
        //     'sd_goals_infos.id as id',
        //     'sd_goals_infos.title_ru as title',
        //     'sd_goals_infos.link as link',
        //     'sustainable_development_goals.name as goal_name'
        // )->get();

        $goalsInfo = DB::table('sd_goals_infos')
                    ->select('sd_goals_infos.id as id',
                    'sd_goals_infos.title_ru as title',
                    'sd_goals_infos.link as link',
                    'sustainable_development_goals.name as goal_name')
                    ->join('sustainable_development_goals','sd_goals_infos.goal_id','=','sustainable_development_goals.id')
                    ->get();
		$goals = SustainableDevelopmentGoal::orderBy('sort', 'asc')->get();
        return view('admin.website.sustainable_development_goals.index', compact('goalsInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$goals = SustainableDevelopmentGoal::orderBy('sort', 'asc')->get();
        return view('admin.website.sustainable_development_goals.create', compact('goals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $now = date_format(now('Asia/Almaty'), 'Ymd');
        $folder = public_path('/assets/images/sustainableDevelopmentGoals/');

        $image = $request->file('image');
        $image_name = $now . $image->getClientOriginalName();
        $bg_image = Image::make($image);
        $bg_image->save($folder . $image_name, 40);

        $goalsInfo = new SdGoalsInfo();
        $goalsInfo->title_ru = $request->title_ru;
        $goalsInfo->title_kk = $request->title_kk;
        $goalsInfo->title_en = $request->title_en;
        $goalsInfo->link = $request->link;
        $goalsInfo->goal_id  = $request->goal_id ;
        $goalsInfo->image = '/assets/images/sustainableDevelopmentGoals/' . $image_name;
        $goalsInfo->save();

        return redirect()->route('admin.website.sustainable_development_goals.index');
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
		$goals = SustainableDevelopmentGoal::orderBy('sort', 'asc')->get();

        $goalsInfo = SdGoalsInfo::find($id);
        return view('admin.website.sustainable_development_goals.edit', compact('goalsInfo', 'goals'));
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

        $now = date_format(now('Asia/Almaty'), 'Ymd');
        $goalsInfo = SdGoalsInfo::find($id);
        $image = $request->file('image');


        if (isset($image)) {
            $folder = public_path('/assets/images/department/page/');
            $image_name = $now . $image->getClientOriginalName();
            $bg_image = Image::make($image);
            $bg_image->save($folder . $image_name, 40);
            $goalsInfo->image = '/assets/images/department/page/' . $image_name;
        }
        $goalsInfo->goal_id = $request->goal_id;
        $goalsInfo->title_ru = $request->title_ru;
        $goalsInfo->title_kk = $request->title_kk;
        $goalsInfo->title_en = $request->title_en;
        $goalsInfo->link = $request->link;
        $goalsInfo->save();
        return redirect()->back()->with('alert', 'Изменения успешно сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goalsInfo = SdGoalsInfo::find($id);
        $goalsInfo->delete();

        return redirect()->route('admin.website.sustainable_development_goals.index');
    }

    // public function upload(Request $request)
    // {
    //     if ($request->hasFile('upload')) {
    //         $originName = $request->file('upload')->getClientOriginalName();
    //         $fileName = pathinfo($originName, PATHINFO_FILENAME);
    //         $extension = $request->file('upload')->getClientOriginalExtension();
    //         $fileName = $fileName . '_' . time() . '.' . $extension;

    //         $request->file('upload')->move(public_path('assets/images/department/page'), $fileName);

    //         $CKEditorFuncNum = $request->input('CKEditorFuncNum');
    //         $url = asset('assets/images/department/page/' . $fileName);
    //         $msg = 'Image uploaded successfully';
    //         $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

    //         @header('Content-type: text/html; charset=utf-8');
    //         echo $response;
    //     }
    // }
}
