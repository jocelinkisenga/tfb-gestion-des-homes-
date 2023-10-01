<?php


use App\Http\Controllers\Api\AuthenticatedController;
use App\Http\Controllers\API\ReservationController;
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

/*===========================
=           etudiantUnilus           =
=============================*/

Route::apiResource('/etudiantUnilus', \App\Http\Controllers\API\EtudiantUniluController::class);

/*=====  End of etudiantUnilus   ======*/

/*===========================
=           logements           =
=============================*/

Route::apiResource('/logements', \App\Http\Controllers\API\LogementController::class);

/*=====  End of logements   ======*/

/*===========================
=           rservations           =
=============================*/



/*=====  End of rservations   ======*/

/*===========================
=           reservations           =
=============================*/

Route::apiResource('/reservations', \App\Http\Controllers\API\ReservationController::class);

/*=====  End of reservations   ======*/

/*===========================
=           etudiants           =
=============================*/

Route::apiResource('/etudiants', \App\Http\Controllers\API\EtudiantController::class);

/*=====  End of etudiants   ======*/

Route::middleware(['auth', ])->prefix("reservation")->group(function () {
    Route::post("/confirmer",[ReservationController::class,"confirmer"]);
    Route::post("/annuler",[ReservationController::class,"annuler"]);
});
