<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//routes for resource
Route::resource('resources',ResourceController::class)
        ->only(['index','show','store','update','destroy']);

//routes for categorie
Route::resource('categories',CategorieController::class)
        ->only(['index','show','store','update','destroy']);

//routes for tag
Route::resource('tags',TagController::class)
        ->only(['index','show','store','update','destroy']);