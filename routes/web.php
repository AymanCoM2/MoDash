<?php

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('pages.welcome');
});
Route::get('/home', function () {
    return view('pages.welcome');
})->name('home');


Route::get('/page', function () {
    $results = DB::select('SELECT * FROM TM.areahierarchy');
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
    return view('pages.page', compact('results'));
});
