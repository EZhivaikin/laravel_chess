<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('game/newGame', 'GameController@index');
Route::put('game/{game_id}/move', 'GameController@move');
Route::get('game/{game_id}/getBoardState', 'GameController@getBoardState');
