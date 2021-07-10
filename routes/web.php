<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.beranda');
});

Route::get('/about', function () {
    return view('layouts.about');
});

route::resource('/pegawai', PegawaiController::class);


// route::resource('/pegawai', PegawaiController::class);

// Route::get('/', function () {
//     return view('content.index');
// });