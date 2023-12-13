<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
    return view('welcome');
});

// 仕様が変わり、要フルパス指定
Route::get('/', 'App\Http\Controllers\HelloController@index');


// 利用規約ページ
route::get('terms', 'App\Http\Controllers\TermsController@get')
    ->middleware('auth');

// 板の一覧ページ
Route::get('boards', 'App\Http\Controllers\BoardsController@get')
    ->middleware('auth');
Route::post('boards', 'App\Http\Controllers\BoardsController@post');


// 板内ページ
Route::get('board', 'App\Http\Controllers\BoardController@get')
    ->middleware('auth');
Route::post('board', 'App\Http\Controllers\BoardController@post');



Route::get('inquiry', 'App\Http\Controllers\InquiryController@get')
    ->middleware('auth');
Route::post('inquiry', 'App\Http\Controllers\InquiryController@post');


Route::get('t0_inquiries', 'App\Http\Controllers\T0_inquiriesController@get')
    ->middleware('auth');
Route::post('t0_inquiries', 'App\Http\Controllers\T0_inquiriesController@show_inquiries');



// 以下Authにより変更不可
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('api')->group(function() {
Route::get('/board', 'BoardController@post');
});
