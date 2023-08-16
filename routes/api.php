<?php

use App\Http\Controllers\AuthenticatedController;
use App\Http\Controllers\RoomController;
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

 Route::middleware(["auth:sanctum"])->group(function(){
    Route::get("rooms/",[RoomController::class,"index"])->name("rooms.all");
    Route::get("room/{id}",[RoomController::class,"show"])->name("room.show");
    Route::post("room/",[RoomController::class, "store"])->name("room.store");

    Route::post("login",[AuthenticatedController::class,'login'])->name('login');
    Route::post("register",[AuthenticatedController::class,'register'])->name('register');

});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
