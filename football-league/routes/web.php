<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;


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
Route::get('/match/{id}',[GameController::class, 'show'])->name('match');
Route::get('/match/{id}/edit',[GameController::class, 'edit'])->name('editmatch');
Route::patch('/match/{game}',[GameController::class, 'update'])->name('updatematch');
Route::get('/match/{game}/delete',[GameController::class, 'destroy'])->name('deletematch');


    