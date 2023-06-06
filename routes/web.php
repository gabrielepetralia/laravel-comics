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

Route::get('/', function () {
    $comics=config("comics");
    return view('comics',compact("comics"));
})->name("comics");

Route::get('/characters', function () {
    return view('characters');
})->name("characters");

Route::get('/movies', function () {
    return view('movies');
})->name("movies");

Route::get('/tv', function () {
    return view('tv');
})->name("tv");

Route::get('/games', function () {
    return view('games');
})->name("games");

Route::get('/collectibles', function () {
    return view('collectibles');
})->name("collectibles");

Route::get('/videos', function () {
    return view('videos');
})->name("videos");

Route::get('/fans', function () {
    return view('fans');
})->name("fans");

Route::get('/news', function () {
    return view('news');
})->name("news");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");

Route::get('/comic_details/{slug}', function ($slug) {
  $comics = config("comics");
  $comicFiltered = array_filter($comics, fn($comic) => $comic["slug"] === $slug);
  $comic = $comicFiltered[array_key_first($comicFiltered)];
  return view('comic_details', compact("comic"));
})->name("comic_details");

