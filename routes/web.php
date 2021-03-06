<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;

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

Route::get('/', [PostagemController::class, 'index']);

Route::get('/create', [PostagemController::class, 'create']);
Route::post('/store', [PostagemController::class, 'store']);
Route::get('/delete/{id}',[PostagemController::class, 'destroy']);
Route::get('/updatecontrol/{id}',[PostagemController::class, 'edit']);
Route::put('/update/{id}',[PostagemController::class, 'update']);

