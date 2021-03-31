<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\EdulevelsController;
use App\Http\Controllers\HomeControllers;
use App\Models\Edulavel;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeControllers::class, 'index']);
Route::patch('/Edulevels/{edulevel}', [EdulevelsController::class, 'update']);
Route::get('/Edulevels/{edulevel}', [EdulevelsController::class, 'edit']);
Route::delete('/Edulevels/{edulevel}', [EdulevelsController::class, 'destroy']);
Route::resource('/Edulevels', EdulevelsController::class);