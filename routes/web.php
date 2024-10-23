<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokohController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('index', [
        "title" => "Login"
    ]);
});

Route::get('/home', [TokohController::class, 'index']);
Route::get('/home/{tokoh:name}', [TokohController::class, 'view']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:name}', [CategoryController::class, 'view']);