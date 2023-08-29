<?php

use App\Models\Mandoob;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home', function () {
    $allMandoobs  = Mandoob::all(); // TODO pagination 
    return view('pages.welcome', compact('allMandoobs'));
})->name('home');
