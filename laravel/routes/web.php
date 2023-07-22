<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'StudentController@homepage')->name('home');
Route::get('new-user', 'StudentController@create')->name('create.user');
Route::post('save-user', 'StudentController@save')->name('save.user');
Route::get('edit-user/{id}', 'StudentController@edit')->name('edit.user');
Route::post('update-user', 'StudentController@update')->name('update.user');
Route::get('delete-user/{id}', 'StudentController@delete')->name('delete.user');
