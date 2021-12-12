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
use App\Http\Controllers\LeagueController;

Route::get('/',  [LeagueController::class, 'index']);
Route::get('/index_data',  [LeagueController::class, 'index_data'])->name('league.index_data');
Route::POST('/random_league',  [LeagueController::class, 'random_league'])->name('league.random_league');




