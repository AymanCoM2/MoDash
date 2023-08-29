<?php

use App\Models\Mandoob;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//------------------------------------------
Route::get('/load-data', function () {
    return view('pages.load-data');
})->name('load-data');


Route::post('/load-data', function () {
    // In cofig/database -> i added the Variables to search for in env file 
    $rows = DB::connection('mysql')->select('SELECT * FROM TM.areahierarchy');
    // Deleting the sqlite Data First & Load Fresh Data
    Mandoob::truncate();
    foreach ($rows as $row) {
        $newMandoob = new Mandoob();
        $newMandoob->userCode = $row->userCode;
        $newMandoob->accountType = $row->accountType;
        $newMandoob->user_areaCode = $row->user_areaCode;
        $newMandoob->areacode = $row->areacode;
        $newMandoob->user_auth_level = $row->user_auth_level;
        $newMandoob->usertoken = $row->usertoken;
        $newMandoob->save();
    }
    Toastr::success('Data Is Loaded', 'Ok', ["positionClass" => "toast-top-center"]);
    return view('pages.load-data');
})->name('load-data-post');
