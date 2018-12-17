<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;

class AdminController extends Controller
{
    public function index()
    {
    	$courses = Course::paginate(5);
        return view('admin.index', compact('courses'));
    }
}
