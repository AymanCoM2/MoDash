<?php

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/page', function () {
    $results = DB::select('SELECT * FROM TM.areahierarchy');
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
    return view('page', compact('results'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
