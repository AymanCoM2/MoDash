<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/page', function () {
    $results = DB::select('SELECT * FROM TM.areahierarchy');
    return view('page', compact('results'));
});
