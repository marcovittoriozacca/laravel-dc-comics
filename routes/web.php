<?php

use App\Http\Controllers\Backend\ComicsController as ComicsController;
use App\Http\Controllers\Guest\PageController as PageController;
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
//home controller
Route::get('/', [PageController::class, 'index']);

//comics controller
Route::resource('comics', ComicsController::class);