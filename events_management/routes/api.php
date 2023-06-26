<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EventResourceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventTagController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;
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

//routes for locations
Route::resource('locations',LocationController::class)
        ->only(['index','show','store','update','destroy']);

//routes for event_resources
Route::resource('event_resources',EventResourceController::class)
        ->only(['index','show','store','update','destroy']);

//routes for user
Route::resource('users',UserController::class)
        ->only(['index','show','store','update','destroy']);

//routes for eventTag
Route::resource('event_tags',EventTagController::class)
        ->only(['index','show','store','update','destroy']);

//routes for events
Route::resource('events',EventController::class)
        ->only(['index','show','store','update','destroy']);

//routes for payments
Route::resource('payments',PaymentController::class)
        ->only(['index','show','store','update','destroy']);

//routes for reservations
Route::resource('reservations',ReservationControllerController::class)
        ->only(['index','show','store','update','destroy']);