<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use \App\Http\Controllers\WorkerController;

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
    return view('pages.home');
});
\Illuminate\Support\Facades\Auth::routes();
Route::get('post', function () {
    return view('pages.home');
});
Route::post('/addletter', 'App\Http\Controllers\letter@addletter');
Route::post('delete/{id}', ['App\Http\Controllers\WorkerController', 'delete']);
Route::post('/user/delete/{id}', ['App\Http\Controllers\PostController', 'delete']);
Route::resource('worker', 'App\Http\Controllers\WorkerController');
Route::resource('post', 'App\Http\Controllers\PostController');
Route::resource('letter', 'App\Http\Controllers\letter');
Route::resource('blog', 'App\Http\Controllers\BlogController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('/nastavenie', function (){
    return view('pages.Nastavenie');
});
