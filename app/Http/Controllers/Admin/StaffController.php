<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::paginate(5);

        return view('admin.staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staffs.create');
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
            'name'=>'required',
            'position'=>'required',
            'email'=> 'required',
            'password' => 'required',
            'idno' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->move(public_path('staff'), $fileNameToStore);
        }else {
            $fileNameToStore = 'default.png';
        }

        $staff = new Staff([
            'name' => $request->get('name'),
            'position' => $request->get('position'),
            'password'=> $request->get('password'),
            'email'=> $request->get('email'),
            'idno'=> $request->get('idno'),
            'image'=> $request->get('image'),
            'image'=>$fileNameToStore
        ]);
        $staff->save();

        return redirect('admin/staffs')->with('success', 'Staff has been added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('admin.staffs.show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::find($id);

        return view('admin.staffs.edit', compact('staff'));
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
            'name'=>'required',
            'position'=>'required',
            'email'=> 'required',
            'password' => 'required',
            'idno' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/staff', $fileNameToStore);
        }

        $staff = Staff::find($id);
        $staff->name = $request->get('name');
        $staff->position = $request->get('position');
        $staff->password = $request->get('password');
        $staff->email = $request->get('email');
        $staff->idno = $request->get('idno');

        if ($request->hasFile('image')) {
            $staff->image = $fileNameToStore;
        }
        $staff->save();

        return redirect('admin/staffs')->with('success', 'Staff has been updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);

        if ($staff->image != 'default.jpg') {
            Storage::delete('public/staffs/'.$staff->image);
        }

        $staff->delete();

        return redirect('admin/staffs')->with('success', 'Staff has been deleted Successfully!');
    }
}
