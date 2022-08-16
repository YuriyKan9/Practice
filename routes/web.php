<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\ListingController;

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

Route::get('/', [ListingController::class,'index']);
Route::post('store',[ListingController::class,'store'])->middleware('auth');
Route::get('register',[UserController::class,'register'])->middleware('guest');
Route::get('login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('logout',[UserController::class,'logout']);
Route::post('/users/authenticate',[UserController::class,'authenticate']);
Route::post('userstore',[UserController::class,'store']);
Route::get('show',[UserController::class,'show']);
Route::get('create',[ListingController::class,'create'])->middleware('auth');
Route::get('listings',[ListingController::class,'listings'])->middleware('auth');
Route::get('listings/{listing}',[ListingController::class,'listing'])->middleware('auth');
Route::delete('listings/{listing}',[ListingController::class,'delete'])->middleware('auth');
Route::get('listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');
Route::put('listings/{listing}',[ListingController::class,'update'])->middleware('auth');
Route::get('setcookie',[CookiesController::class,'setCookie'])->middleware('auth');
Route::get('getcookie',[CookiesController::class,'getCookie'])->middleware('auth');
Route::get('mail',[MailController::class,'sendMail'])->middleware('auth');
Route::get('verified',[MailController::class,'verifyMail'])->middleware('auth');