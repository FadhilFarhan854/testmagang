<?php

use App\Http\Controllers\barangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('barang', barangController::class);
Route::get('/csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});

