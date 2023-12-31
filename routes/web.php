<?php

use App\Models\Mandoob;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::group([], __DIR__ . '/dataLoading.php');
Route::group([], __DIR__ . '/homing.php');

// ========================
Route::get('/tree', function () {
    $areas = DB::table('mandoobs')
        ->groupBy('areacode')
        ->pluck('areacode');
    return view('pages.tree-view', compact('areas'));
})->name('tree');


Route::get('/tree-two', function () {
    $areas = DB::table('mandoobs')
        ->groupBy('areacode')
        ->pluck('areacode');
    return view('pages.two-tree', compact('areas'));
})->name('tree-two');