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

Route::get('/docs', function () {
    return view('docs');
});


Route::get('/', function () {
    return view('home');
});


// named route
Route::get('/hw', function () {
    return 'hello world';
})->name('hw');

// parameter route
Route::get('/grt/{nm}', function ($nm) {
    return  'hello ' . $nm;
})->name('g');