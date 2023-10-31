<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DayFourController;
use App\Http\Controllers\DayThreeController;
use App\Http\Controllers\DayFiveController;
use App\Http\Controllers\DayEightController;

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


// DAY 3

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

// route to day 3
Route::get('/d3', [DayThreeController::class, 'show']);


// DAY 4
Route::get('/d4', [DayFourController::class, 'show']);


# DAY 5
Route::get('/d5', [DayFiveController::class, 'show']);

# day 8
Route::post('/d8/reg', [DayEightController::class, 'register'])->name('form.register');
Route::get('/d8', [DayEightController::class, 'showForm'])->name('form.show');