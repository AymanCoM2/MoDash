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
    $search = request()->query('search');
    $allMandoobs = Mandoob::when($search, function ($query, $search) {
        return $query->where('areacode', 'like', '%' . $search . '%')
            ->orWhere('accountType', 'like', '%' . $search . '%')
            ->orWhere('user_areaCode', 'like', '%' . $search . '%');
    });

    if (!$search) {
        $allMandoobs = Mandoob::all();
    }

    return view('pages.welcome', compact('allMandoobs'));
})->name('home');
