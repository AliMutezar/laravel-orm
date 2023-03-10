<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrmController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('clubs', [LandingPageController::class, 'clubs'])->name('landing.clubs');
Route::get('players', [LandingPageController::class, 'players'])->name('landing.players');
Route::get('managers', [LandingPageController::class, 'managers'])->name('landing.managers');
Route::get('stadiums', [LandingPageController::class, 'stadiums'])->name('landing.stadiums');
Route::resource('/', LandingPageController::class);

// Many to Many
Route::get('mtom', [OrmController::class, 'index']);