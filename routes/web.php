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
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $fumetti = config('comics');
    return view('comics', ['comics' => $fumetti]);
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $fumetti = config('comics');

    if(is_numeric($id) && $id >= 0 && $id < count($fumetti)) {
        $fumetto = $fumetti[$id];
        return view('comic', ['comic' => $fumetti]);
    } else {
        abort('404');
    }

    
    
})->name('comic');


