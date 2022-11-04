<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
// use App\Models\Players;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', [PlayersController::class, 'index'])->name('players.index');
Route::get('/teams', [TeamsController::class, 'index'])->name('teams.index');


Route::get('/players/{id}', [PlayersController::class, 'show'])->where('id','[0-9]+')->name('players.show');
Route::get('/teams/{id}', [TeamsController::class, 'show'])->where('id','[0-9]+')->name('teams.show');

Route::get('/players/delete/{id}', [PlayersController::class, 'destroy'])->where('id','[0-9]+')->name('players.destroy');
Route::get('/teams/delete/{id}', [TeamsController::class, 'destroy'])->where('id','[0-9]+')->name('teams.destroy');