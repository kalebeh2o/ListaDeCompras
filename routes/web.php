<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


Route::get('/',  [ProductController::class, 'index']);

Route::get('/deletar/{id}',  [ProductController::class, 'delete']);

Route::get('/atualizar/{id}',  [ProductController::class, 'update']);

Route::get('/criar',  [ProductController::class, 'create']);

Route::post('/products', [ProductController::class, 'createSend']);

Route::put('/update/{id}', [ProductController::class, 'updateSend']);

Route::delete('/delete/{id}', [ProductController::class, 'deleteSend']);
