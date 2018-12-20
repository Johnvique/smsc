<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(5);
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'qualification' => 'required',
            'mode' => 'required',
            'duration' => 'required',
            'fee' => 'required'
        ]);

        $course = new Course([
            'name' => $request->get('name'),
            'qualification' => $request->get('qualification'),
            'mode' => $request->get('mode'),
            'duration' => $request->get('duration'),
            'fee' => $request->get('fee')
        ]);

        $course->save();

        return redirect('admin/courses')->with('success', 'Course created successfully!');
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
        $course = Course::findOrFail($id);

        return view('admin.courses.edit', ['course' => $course]);
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
        $request -> validate([
            'name' => 'required',
            'qualification' => 'required',
            'mode' => 'required',
            'duration' => 'required',
            'fee' => 'required'
        ]);

        $course = Course::findOrFail($id);
        $course->name = $request->get('name');
        $course->qualification = $request->get('qualification');
        $course->mode = $request->get('mode');
        $course->duration = $request->get('duration');
        $course->fee = $request->get('fee');
        $course->save();

        return redirect('admin/courses')->with('success', 'Course Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        $course->delete();

        return redirect('admin/courses')->with('success', 'Course has been deleted Successfully!');
    }
}
