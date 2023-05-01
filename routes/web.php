<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
Route::get('/', function() {
    return view('welcome');
})->name('login');

Route::get('/register', function() {
    return view('register');
});


Route::middleware('auth')->get('/todos', [TodosController::class, 'index']);
Route::post('/new/todo', [TodosController::class, 'newTodo']);
Route::post('/new/user', [UserController::class, 'newUser']);
Route::post('/login/auth', [AuthController::class, 'authentication']);
Route::put('/update/realized/todo/{id}', [TodosController::class, 'updateRealizedTodo']);
Route::get('/show/todo/{id}', [TodosController::class, 'showTodo']);
Route::put('/update/todo/{id}', [TodosController::class, 'updateTodo']);
Route::delete('/delete/todo/{id}', [TodosController::class, 'deleteTodo']);
Route::post('/logout', [UserController::class, 'logout']);