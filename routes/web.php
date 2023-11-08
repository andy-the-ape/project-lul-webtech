<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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
Route::view('/','index');

Route::view('/home','index');

Route::view('/login','loginForm');

Route::view('/profile','profilePage');

Route::view('/rating','rating-page');

Route::view('/create-user','createForm');

Route::view('/game','gamepage');

Route::get('/games',[GameController::class,'index']);

Route::view('/g','browse');




