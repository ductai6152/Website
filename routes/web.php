<?php

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

<<<<<<< HEAD
Route::get('/','FrontendController@index');

Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    Route::resource('backend/arts','ArtController');
	
});
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 0ff67731da1638e89f4e8b9dbbd166170f5252da
