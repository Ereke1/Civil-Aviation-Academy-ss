<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsAIController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'AI news module is not configured.',
        ]);
    }

    public function create()
    {
        return response()->json([
            'message' => 'AI news creation is not configured.',
        ]);
    }

    public function store(Request $request)
    {
        return redirect()->back();
    }

    public function show($id)
    {
        return response()->json([
            'id' => $id,
            'message' => 'AI news item not configured.',
        ]);
    }

    public function edit($id)
    {
        return response()->json([
            'id' => $id,
            'message' => 'AI news edit is not configured.',
        ]);
    }

    public function update(Request $request, $id)
    {
        return redirect()->back();
    }

    public function destroy($id)
    {
        return redirect()->back();
    }
}
