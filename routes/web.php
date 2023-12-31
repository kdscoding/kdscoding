<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
 
Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/dt_perusahaan', 'MsPerusahaanController@index');
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
// Route::get('/dashboard', 'HomeController@index');

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});