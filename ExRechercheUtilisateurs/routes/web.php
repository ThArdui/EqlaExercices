<?php

use Illuminate\Support\Facades\Route;
Route::post('/personsearch',[PersonController::class,'PersonController']);

Route::get('/', function () {
    return view('welcome');
});
