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
Route::get('/about', 'PagesController@about')->name('about');
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

Route::group(['prefix' => 'admin','middleware'=>['auth','admin']], function () {
Route::get('/', 'Admin\AdminController@index')->name('index');
Route::resource('students', 'Admin\StudentController');
Route::resource('courses', 'Admin\CoursesController');
Route::resource('files', 'Admin\FileController');
});

// Route::prefix('admin')->middleware('auth', 'admin')->group(function(){
// 	Route::get('/', 'Admin\AdminController@index')->name('index');

// });