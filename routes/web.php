<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-siamo', function(){
    return view('chiSiamo');
});

Route::get('/dove-andiamo', function(){
    return view('doveAndiamo');
});