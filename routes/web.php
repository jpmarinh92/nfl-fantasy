<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');

Route::get('/players', 'PlayersController@index')->name('players.index');
Route::get('/players/create', 'PlayersController@create')->name('players.create');
Route::get('/players/{id}/edit', 'PlayersController@edit')->name('players.edit');
Route::patch('/players/{id}', 'PlayersController@update')->name('players.update');
Route::get('/players/{id}', 'PlayersController@show')->name('players.show');
Route::post('/players', 'PlayersController@store')->name('players.store');
Route::delete('/players/{id}', 'PlayersController@destroy')->name('players.destroy');

Route::get('/teams', 'TeamsController@index')->name('teams.index');
Route::get('/teams/create', 'TeamsController@create')->name('teams.create');
Route::get('/teams/{name}/edit', 'TeamsController@edit')->name('teams.edit');
Route::patch('/teams/{id}', 'TeamsController@update')->name('teams.update');
Route::post('/teams', 'TeamsController@store')->name('teams.store');
Route::get('/teams/{name}', 'TeamsController@show')->name('teams.show');
Route::delete('/teams/{id}', 'TeamsController@destroy')->name('teams.destroy');


// Route::post('/club', 'TeamsController@createTeam');


// Route::post('/teams', 'TeamController@store');



?>