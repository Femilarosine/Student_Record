<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.layouts.main');
});


Route::get('we','App\Http\Controllers\StudentController@we')->name('we');

Route::get('contact','App\Http\Controllers\StudentController@contact')->name('contact');

Route::get('portimage','App\Http\Controllers\StudentController@portimage')->name('portimage');

Route::get('about','App\Http\Controllers\StudentController@about')->name('about');






Route::get('view','App\Http\Controllers\StudentController@view')->name('view');

Route::get('about','App\Http\Controllers\StudentController@about')->name('about');

Route::get('count','App\Http\Controllers\Count@count')->name('admin.count');

Route::get('form','App\Http\Controllers\StudentController@form')->name('form');

Route::get('subpage','App\Http\Controllers\StudentController@subpage')->name('subpage');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('dashboard');
});

Route::group(['prefix'=>'student','as'=>'student.','middleware'=>['auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'studentIndex'])->name('dashboard');
});

Route::group(['prefix'=>'teacher','as'=>'teacher.','middleware'=>['auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'teacherIndex'])->name('dashboard');
});




Route::get('student/list','App\Http\Controllers\StudentsController@index')->name('student.list');
Route::get('student/create','App\Http\Controllers\StudentsController@create')->name('student.create');
Route::post('student/store','App\Http\Controllers\StudentsController@store')->name('student.store');
Route::get('student/edit/{id}','App\Http\Controllers\StudentsController@edit')->name('student.edit');
Route::put('student/update/{id}','App\Http\Controllers\StudentsController@update')->name('student.update');
Route::get('student/show/{id}','App\Http\Controllers\StudentsController@show')->name('student.show');
Route::get('student/destroy/{id}','App\Http\Controllers\StudentsController@destroy')->name('student.destroy');



Route::get('teacher/list','App\Http\Controllers\TeacherController@index')->name('teacher.list');
Route::get('teacher/create','App\Http\Controllers\TeacherController@create')->name('teacher.create');
Route::post('teacher/store','App\Http\Controllers\TeacherController@store')->name('teacher.store');
Route::get('teacher/edit/{id}','App\Http\Controllers\TeacherController@edit')->name('teacher.edit');
Route::put('teacher/update/{id}','App\Http\Controllers\TeacherController@update')->name('teacher.update');
Route::get('teacher/show/{id}','App\Http\Controllers\TeacherController@show')->name('teacher.show');
Route::get('teacher/destroy/{id}','App\Http\Controllers\TeacherController@destroy')->name('teacher.destroy');




Route::get('department/list','App\Http\Controllers\DepartmentController@index')->name('department.list');
Route::get('department/create','App\Http\Controllers\DepartmentController@create')->name('department.create');
Route::post('department/store','App\Http\Controllers\DepartmentController@store')->name('department.store');
Route::get('department/edit/{id}','App\Http\Controllers\DepartmentController@edit')->name('department.edit');
Route::put('department/update/{id}','App\Http\Controllers\DepartmentController@update')->name('department.update');
Route::get('department/show/{id}','App\Http\Controllers\DepartmentController@show')->name('department.show');
Route::get('department/destroy/{id}','App\Http\Controllers\DepartmentController@destroy')->name('department.destroy');






Route::get('/profile/{id}', 'App\Http\Controllers\ProfileController@showProfile')->name('view.stu');
Route::get('/profile', 'App\Http\Controllers\ProfileController@showStudentProfiles')->name('count.stu');

// Route::post('/data-pegawai/{id}/store-detail/', [StudentController::class,'storeDetail'])->name('stu.view');