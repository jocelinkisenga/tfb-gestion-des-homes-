<?php


use App\Http\Controllers\Api\AuthenticatedController;
use App\Http\Controllers\Api\HomeController;
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

Route::get("/",[HomeController::class,'index']);

Route::post("register",[AuthenticatedController::class,"register"])->name("register");
Route::post("login",[AuthenticatedController::class,"login"])->name("login");

Route::apiResource('/rooms', \App\Http\Controllers\API\RoomController::class);

Route::apiResource('/subscriptions', \App\Http\Controllers\API\SubscriptionController::class);

Route::apiResource('/etudiantUnilus', \App\Http\Controllers\API\EtudiantUniluController::class);

Route::apiResource('/logements', \App\Http\Controllers\API\LogementController::class);

Route::apiResource('/reservations', \App\Http\Controllers\API\ReservationController::class);

Route::apiResource('/etudiants', \App\Http\Controllers\API\EtudiantController::class);

Route::middleware(['auth', ])->prefix("reservations")->group(function () {
    Route::get("/confirmer",[ReservationController::class,"confirmer"]);
    Route::get("/annuler",[ReservationController::class,"annuler"]);
});
