<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
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
Route::get('/team/{id}/edit',[TeamController::class, 'edit'])->name('edit_team');
Route::patch('/team/{team}',[TeamController::class, 'update'])->name('updateteam');
Route::get('/team/{team}/delete',[TeamController::class, 'destroy'])->name('deleteteam');

Route::get('/match', [GameController::class, 'index'])->name('matches');
Route::get('/match/createMatch',[GameController::class, 'create'])->name('creatematch');
Route::post('/match',[GameController::class, 'store'])->name('storematch');

/*
Route::get('/', function () {
    return view('home');
});
*/