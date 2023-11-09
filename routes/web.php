<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\studentcontroller;
use App\Http\controllers\teachercontroller;
use App\Http\controllers\coursecontroller;

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


Route::get('/',[studentcontroller::class,'stulist']);

Route::get('/studentform',[studentcontroller::class,'stuform']);

Route::post('/create',[studentcontroller::class,'stuinsert']);

Route::get('/edit/{id}',[studentcontroller::class,'stuedit']);

Route::post('/update-stu/{id}',[studentcontroller::class,'stupdate']);

Route::get('delete/{id}',[studentcontroller::class,'remove']);





Route::get('/teacher',[teachercontroller::class,'teacherlist']);

Route::get('/add-teacher',[teachercontroller::class,'teacherform']);

Route::post('/insert-teacher',[teachercontroller::class,'teacherInsert']);

Route::get('/edit-teacher/{id}',[teachercontroller::class,'teacheredit']);

Route::post('/update-teacher/{id}',[teachercontroller::class,'teacherUpdate']);

Route::get('/delete-teacher/{id}',[teachercontroller::class,'removeteacher']);





Route::get('/courses',[coursecontroller::class,'courselist']);

Route::get('/courseform',[coursecontroller::class,'courseform']);

Route::post('/addcourse',[coursecontroller::class,'addcourse']);

Route::get('/edit-course/{id}',[coursecontroller::class,'course_edit']);

Route::post('/update-course/{id}',[coursecontroller::class,'course_update']);

Route::get('/delete-course/{id}',[coursecontroller::class,'remove_course']);
