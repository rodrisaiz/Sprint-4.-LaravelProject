<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TeamController::class, 'index'])->name('home');
Route::get('/team/createTeam',[TeamController::class, 'create'])->name('createteam');
Route::post('/team',[TeamController::class, 'store'])->name('storeteam');
Route::get('/team/{id}',[TeamController::class, 'show'])->name('team');




Route::view('/matches','/match/matches')->name('matches');
Route::view('/match','/match/match')->name('match');
Route::view('/matchcreate','/match/createMatch')->name('creatematch');


/*
Route::get('/', function () {
    return view('home');
});
*/