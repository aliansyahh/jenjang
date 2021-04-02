<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\EdulevelsController;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\ProgramsController;
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

// Edulevels
Route::get('/Edulevels', [EdulevelsController::class, 'index']);
Route::get('/Edulevels/create', [EdulevelsController::class, 'create']);
Route::get('/Edulevels/{edulevel}', [EdulevelsController::class, 'edit']);
Route::post('/Edulevels', [EdulevelsController::class, 'store']);
Route::patch('/Edulevels/{edulevel}', [EdulevelsController::class, 'update']);
Route::delete('/Edulevels/{edulevel}', [EdulevelsController::class, 'destroy']);
// Route::resource('/Edulevels', EdulevelsController::class);


// Programs
Route::get('/Programs/create', [ProgramsController::class, 'create']);
Route::get('/Programs/{program}/edit', [ProgramsController::class, 'edit']);
Route::patch('/Programs/{program}', [ProgramsController::class, 'update']);
Route::delete('/Programs/{program}', [ProgramsController::class, 'destroy']);
Route::post('/Programs', [ProgramsController::class, 'store']);
Route::get('/Programs/{program}', [ProgramsController::class, 'show']);
Route::resource('/Programs', ProgramsController::class);