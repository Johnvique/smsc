<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::paginate(5);
        return view('admin.files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.files.create');
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
            'name'=> ['required'],
            'file' => 'required|file|mimes:pdf|max:2048'
        ]);

        if($request->hasFile('file')) {
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file')->move(public_path('files'), $fileNameToStore);
        }else {
            $fileNameToStore = 'default.pdf';
        }

        $file = new File([
            'name' => $request->get('name'),
            'file'=> $request->get('file'),
            'file'=>$fileNameToStore
        ]);
        $file->save();

        return redirect('admin/files')->with('success', 'File has been added Successfully!');
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
        $file = File::findOrFail($id);

        return view('admin.files.edit', ['file' => $file]);
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
            'name'=> ['required'],
            'file' => 'required|file|mimes:pdf|max:2048'
        ]);

        if($request->hasFile('file')) {
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file')->move(public_path('files'), $fileNameToStore);
        }

        $file = File::find($id);
        $file->name = $request->get('name');
        if ($request->hasFile('file')) {
            $file->file = $fileNameToStore;
        }
        $file->save();

        return redirect('admin/files')->with('success', 'File has been updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::find($id);

        if ($file->file != 'default.pdf') {
            Storage::delete('public/files/'.$file->file);
        }

        $file->delete();

        return redirect('admin/files')->with('success', 'File has been deleted Successfully!');
    }
}
