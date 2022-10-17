<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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

Route::get('/', [TasksController::class, 'index']);
Route::get('create', [TasksController::class, 'create']);
Route::get('details/{id}', [TasksController::class, 'details']);

Route::get('edit/{id}', [TasksController::class, 'edit']);

Route::get('delete/{id}', [TasksController::class, 'destroy']);
