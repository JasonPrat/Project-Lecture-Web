<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FilmController;
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

Route::get('/', [FilmController::class,'index'])->name('home');

Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/film-index',[FilmController::class,'viewIndexForm'])->name('indexfilm');

Route::get('/create-film',[FilmController::class,'viewInsertForm'])->name('createfilm');

Route::post('/createpost',[FilmController::class,'create_post'])->name('createpost');