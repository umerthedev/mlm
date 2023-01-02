<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//HomeRoute
Route::get('/',[HomeController::class,'index'])->name('user.home');

//LoginRoute
Route::get('/login',[LoginController::class,'index'])->name('user.login');

//RegisterRoute
Route::get('/register',[RegisterController::class,'index'])->name('user.resister');

//SponsorsearchRoute
Route::post('/searchsponsor',[RegisterController::class,'searchsponsor'])->name('search.sponsorid');
//user registration
Route::post('/store',[RegisterController::class,'store'])->name('user.reg');


