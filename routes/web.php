<?php

use App\Http\Controllers\check;
use App\Http\Controllers\helpGuideController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Auth::routes();



Route::get('/store-data',[PostController::class,'store']);

Route::get('/pcr-store',[PostController::class,'pcrStore']);

Route::get('/',[PostController::class,'show']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/help-guide',[helpGuideController::class,'hgstore']);

Route::get('/helpGuide',[helpGuideController::class,'show']);


