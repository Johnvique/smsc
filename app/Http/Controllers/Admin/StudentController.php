<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(5);

        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.students.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name'=>'required',
            'dob'=>'required',
            'email'=> 'required',
            'gender' => 'required',
            'idno' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->move(public_path('students'), $fileNameToStore);
        }else {
            $fileNameToStore = 'default.png';
        }

        $student = new Student([
            'full_name' => $request->get('full_name'),
            'dob' => $request->get('dob'),
            'course_id' => $request->get('course_id'),
            'gender'=> $request->get('gender'),
            'email'=> $request->get('email'),
            'idno'=> $request->get('idno'),
            'image'=> $request->get('image'),
            'image'=>$fileNameToStore
        ]);
        $student->save();

        return redirect('admin/students')->with('success', 'Student has been added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $courses = Course::all();

        return view('admin.students.edit', compact('student', 'courses'));
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
        $request->validate([
            'full_name'=>'required',
            'dob'=>'required',
            'email'=> 'required',
            'gender' => 'required',
            'idno' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/students', $fileNameToStore);
        }

        $student = Student::find($id);
        $student->full_name = $request->get('full_name');
        $student->dob = $request->get('dob');
        $student->course_id = $request->get('course_id');
        $student->email = $request->get('email');
        $student->gender = $request->get('gender');
        $student->idno = $request->get('idno');

        if ($request->hasFile('image')) {
            $student->image = $fileNameToStore;
        }
        $student->save();

        return redirect('admin/students')->with('success', 'Student has been updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        if ($student->image != 'default.jpg') {
            Storage::delete('public/students/'.$student->image);
        }

        $student->delete();

        return redirect('admin/students')->with('success', 'Student has been deleted Successfully!');
    }
}
