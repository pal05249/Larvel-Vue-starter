<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
// Route::middleware('auth')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/{any?}', function () {
//     return view('welcome')->middleware('auth');
// });



Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/{vue_capture?/}', function () {
    return view('home');
})->where('vue_capture', '[\/\w\.-]*')->middleware('auth');
