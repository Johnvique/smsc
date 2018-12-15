<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('front.index');
    }
    public function about(){
    	return view('front.about');
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
        return view('front.downloads');
    }
    // public function index(){
    // 	return view('front.index');
    // }
}
