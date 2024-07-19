<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home') ;
})->name('home');


use Illuminate\Http\Request;
Route::post('/table', function (Request $request) {
    return view('table', ['number' => $request->input('number')]);
})->name('table');


