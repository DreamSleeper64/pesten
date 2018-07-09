<?php

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
    return view('welcome',[
        'name' => "Joehoe",
    ]);
});

Route::get('/card', function () {
    $deck = file_get_contents('https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1');
    $cards = ["bla", 'blo'];
    return view('card', compact('cards'));
});