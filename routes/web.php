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

Route::get('/', [ 'uses' => 'TeacherController@getIndex'])->name('homeapp');

Route::get('teacher/{id}', ['uses' => 'TeacherController@getTeacher'])->name('teacher');

Route::get('add-teacher', ['uses' => 'TeacherController@addTeacher'])->name('add.teacher');

Route::post('save-teacher', ['uses' => 'TeacherController@saveTeacher'])->name('save-teacher');

Route::get('delete-teacher/{id}', ['uses' => 'TeacherController@deleteTeacher'])->name('delete-teacher');

Route::post('teacher/{id}/comment', ['uses' => 'TeacherController@setComment'])->name('comment');

Route::get('teacher/{id}/edit', ['uses' => 'TeacherController@editTeacherStep1'])->name('edit');

Route::post('teacher/{id}/edited', ['uses' => 'TeacherController@editTeacher'])->name('edit-teacher');

Route::post('search', ['uses' => 'TeacherController@searchTeacher'])->name('search');

Route::post('blog/add-post',['uses' => 'PostblogController@savePostblog'])->name('add-post-blog');

Route::get('post/{id}', ['uses' => 'PostblogController@seePost'])->name('see-post');

Route::post('post/{id}/comment', ['uses' => 'PostblogController@setComment'])->name('respond-toPost');

Route::get('about', function(){
	return view('others.about');
})->name('about');

Route::get('politicas-de-privacidad', function(){
	return view('others.politicas-de-privacidad');
})->name('politicas');

Route::get('terminos-de-uso', function(){
	return view('others.terminos-de-uso');
})->name('terminos');

Route::get('blog',['uses' => 'PostblogController@showBlog'])->name('blog');

//Admin

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
