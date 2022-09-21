<?php

use App\Http\Controllers\MeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
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

Route::get('/',[MeController::class,'index'])->name('index');
Route::get('/project-details/{id}',[PortfolioController::class,'project_details'])->name('getproject');
Route::post('/',[ContactController::class,'save_msg'])->name('send_msg');

Route::get('/test',[MeController::class,'test'])->name('test');