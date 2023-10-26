<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/detail/dataset', function () {
    return view('pages.DetailDataset');
});

Route::get('/user/dataset', function () {
    return view('pages.user.dataset');
});

Route::get('/admin/menunggu-konfirmasi', function () {
    return view('pages.user.admin.MenungguKonfirmasi');
});

Route::get('/admin/telah-konfirmasi', function () {
    return view('pages.user.admin.TelahDikonfirmasi');
});

