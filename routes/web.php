<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
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

Route::get('/update-film/{id}',[FilmController::class,'viewUpdateForm'])->name('updatefilm');

Route::post('/updatepost',[FilmController::class,'update_post'])->name('updatepost');

Route::delete('/delete/{id}',[FilmController::class,'delete_film'])->name('deletefilm');

Route::get('/login',[LoginController::class,'loginPage'])->name('login');

Route::post('/loginpost',[LoginController::class,'loginPost'])->name('loginPost');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'registers'])->name('register');

Route::post('/registpost',[LoginController::class,'register_post'])->name('registPost');

Route::get('/details/{id}',[FilmController::class,'viewDetail'])->name('details');

Route::post('/buy',[TransactionController::class,'buy'])->name('buy');

Route::post('/rent',[TransactionController::class,'rent'])->name('rent');

Route::get('/transindex',[TransactionController::class,'index_member'])->name('transindex');

Route::get('/transindexadmin',[TransactionController::class,'index_admin'])->name('admintrans');