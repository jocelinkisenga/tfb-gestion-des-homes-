<?php


use App\Http\Controllers\Api\AuthenticatedController;
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

/*===========================
=           rooms           =
=============================*/
Route::post("register",[AuthenticatedController::class,"register"])->name("register");
Route::post("login",[AuthenticatedController::class,"login"])->name("login");

Route::apiResource('/rooms', \App\Http\Controllers\API\RoomController::class);

/*=====  End of rooms   ======*/

/*===========================
=           subscriptions           =
=============================*/

Route::apiResource('/subscriptions', \App\Http\Controllers\API\SubscriptionController::class);

/*=====  End of subscriptions   ======*/
