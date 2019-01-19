<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\File;
use App\Course;

use Storage;

class PagesController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function uikit(){
        return view('front.index1');
    }
    public function material(){
        return view('front.index2');
    }
    public function front(){
    	return view('index');
    }
    public function about(){
        return view('front.about');
    }
    public function about1(){
    	return view('front.about1');
    }
    public function courses(){
    	return view('front.courses');
    }
    public function contact(){
    	return view('front.contact');
    }
    public function dss(){
    	return view('front.diploma-in-secretarial-studies');
    }
    public function dbm(){
    	return view('front.diploma-in-business-management');
    }
    public function css(){
    	return view('front.certificate-in-secretarial-studies');
    }
    public function cpa(){
    	return view('front.cpa');
    }
    public function packages(){
    	return view('front.computer-packages');
    }
    public function cams(){
    	return view('front.cams');
    }
    public function fee(){
        return view('front.fee');
    }
    public function downloads(){
        $files = File::paginate(5);
        return view('front.downloads', compact('files'));
    }
    public function file($id){
        $dl = File::find($id);
    	return Storage::download($dl->file, $dl->name);
    }
}
