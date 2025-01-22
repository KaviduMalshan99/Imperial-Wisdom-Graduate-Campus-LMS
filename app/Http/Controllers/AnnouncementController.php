<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('TeacherDashboard.Anouncement.base-input', compact('announcements'));
    }

    // public function create()
    // {
    //     return view('announcements.create');
    // }

    public function store(Request $request)
    {
        // dd($request);
        $request -> validate([
            'lecture_id' => 'required',
            'announcement' => 'required',
            'course_id' => 'required',
            'target_audience' => 'required',
            'message' => 'required',
        ]);

        $data = $request->except('_token');

        $announcements = new Announcement();
        $announcements->lecture_id = $data['lecture_id'];
        $announcements->announcement = $data['announcement'];
        $announcements->course_id = $data['course_id'];
        $announcements->target_audience = $data['target_audience'];
        $announcements->message = $data['message'];
        $announcements->save();

        return redirect()->route('announcement.index')->with('message','Successfully Add New Details');
    }

    // public function show(Announcement $announcement)
    // {
    //     return view('announcements.show', compact('announcement'));
    // }

    // public function edit(Announcement $announcement)
    // {
    //     return view('announcements.edit', compact('announcement'));
    // }

    // public function update(Request $request, Announcement $announcement)
    // {
    //     $validated = $request->validate([
    //         'lecture_id' => 'required|exists:lectures,id',
    //         'announcement' => 'required|string',
    //         'course_id' => 'required|exists:courses,id',
    //         'target_audience' => 'required|string',
    //         'message' => 'required|string',
    //     ]);

    //     $announcement->update($validated);

    //     return redirect()->route('announcements.index')->with('success', 'Announcement updated successfully!');
    // }

    // public function destroy(Announcement $announcement)
    // {
    //     $announcement->delete();

    //     return redirect()->route('announcements.index')->with('success', 'Announcement deleted successfully!');
    // }
}
