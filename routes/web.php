<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::get('/', [MessageController::class, 'index']);
Route::post('/post', [MessageController::class, 'store']);
Route::get('/delete/{id}', [MessageController::class,'destroy']);
Route::get('/message/{id}', [MessageController::class,'show']);
Route::put('/message/update/{id}', [MessageController::class,'update']);
