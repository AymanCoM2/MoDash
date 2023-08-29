<?php

use App\Models\Mandoob;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::group([], __DIR__ . '/dataLoading.php');
Route::get('/', function () {
    return view('pages.welcome');
});
Route::get('/home', function () {
    return view('pages.welcome');
})->name('home');
