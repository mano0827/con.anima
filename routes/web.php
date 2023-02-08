<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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



Route::get('/', [PagesController::class, 'getHome'])->name('home');
Route::get('/home', [PagesController::class, 'getHome'])->name('home');
Route::post('/home/send', [PagesController::class, 'postSend'])->name('send');
Route::get('/service_first', [PagesController::class, 'getFirst'])->name('first');
Route::get('/service_semi', [PagesController::class, 'getSemi'])->name('semi');
Route::get('/service_full', [PagesController::class, 'getFull'])->name('full');
Route::get('/contact', [PagesController::class, 'getContact'])->name('contact');
