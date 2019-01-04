<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index')->name('index');
Route::get('/index', 'PagesController@front')->name('front');
Route::get('/index1', 'PagesController@uikit')->name('uikit');
Route::get('/index2', 'PagesController@material')->name('material');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/about1', 'PagesController@about1')->name('about1');
Route::get('/courses', 'PagesController@courses')->name('courses');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/diploma-in-secretarial-studies', 'PagesController@dss')->name('dss');
Route::get('/diploma-in-business-management', 'PagesController@dbm')->name('dbm');
Route::get('/certificate-in-secretarial-studies', 'PagesController@css')->name('css');
Route::get('/cpa', 'PagesController@cpa')->name('cpa');
Route::get('/computer-packages', 'PagesController@packages')->name('packages');
Route::get('/cams', 'PagesController@cams')->name('cams');
Route::get('/fee', 'PagesController@fee')->name('fee');
Route::get('/downloads', 'PagesController@downloads')->name('downloads');
// Route::get('/downloads/{id}', 'PagesController@file')->name('downloadfile');

Route::group(['prefix' => 'admin','middleware'=>['auth','admin']], function () {
	Route::get('/', 'Admin\AdminController@index')->name('index');
	Route::resource('students', 'Admin\StudentController');
	Route::resource('courses', 'Admin\CoursesController');
	Route::resource('files', 'Admin\FileController');
	Route::resource('staffs', 'Admin\StaffController');
});

// Route::prefix('admin')->middleware('auth', 'admin')->group(function(){
// 	Route::get('/', 'Admin\AdminController@index')->name('index');

// });

Route::get('/downloads/{id}', function() {

    $pathToFile = public_path()."/files/{$file}";
    $name = time().'.pdf';

    $headers = array(
    	'Content-Type: application/pdf',
    );

    return response()->download($pathToFile, $name, $headers);
});

