<?php

use App\Http\Controllers\AuthenticatedController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Models\Reservation;
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


    Route::get("reservations/",[ReservationController::class, "index"])->name('reservations.all');
    Route::get("reservation/{id}",[ReservationController::class, "show"])->name('reservations.show');
    Route::put("reservation/{id}",[ReservationController::class, "update"])->name('reservations.update');
    Route::post("reservation",[ReservationController::class,'store'])->name("reservation.store");
  Route::delete("reservationDelete/",[ReservationController::class, "destroy"])->name('reservations.destroy');

    Route::post("login",[AuthenticatedController::class,'login'])->name('login');
    Route::post("register",[AuthenticatedController::class,'register'])->name('register');

});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
