<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lectures = Lecture::all();
        return $lectures;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lectures = Lecture::create($request->all());
        return $lectures;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lectures = Lecture::find($id);
        return $lectures;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lectures = Lecture::find($id);
        $lectures->update($request->all());

        return $lectures;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lectures = Lecture::find($id);
        $lectures->delete();

        return response()->json(['message' => 'Lecture deleted successfully'], 200);
    }
}
