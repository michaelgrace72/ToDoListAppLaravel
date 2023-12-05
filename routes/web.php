<?php

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
use App\Http\Controllers\TodoController;
use App\Models\Todo;
Route::get('/', [TodoController::class, 'index']);
Route::get('create', [TodoController::class, 'create']);
Route::get('details', [TodoController::class, 'details']);
Route::get('edit', [TodoController::class, 'edit']);
Route::post('update', [TodoController::class, 'update']);
Route::get('delete', [TodoController::class, 'delete']);
Route::post('store-data', [TodoController::class, 'store']);