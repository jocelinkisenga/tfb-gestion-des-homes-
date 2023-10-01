<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reservation\CreateReservationRequest;
use App\Http\Requests\Reservation\UpdateReservationRequest;
use App\Http\Resources\Reservation\ReservationResource;
use App\Models\Reservation;
use App\Observers\UpdateRoomPlacesObserver;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    use ApiResponse;
    public function __construct(public UpdateRoomPlacesObserver $updateRoomPlacesObserver)
    {
        $this->middleware("auth:sanctum");
    }

    public function index(): AnonymousResourceCollection
    {
        $reservations = Reservation::useFilters()->dynamicPaginate();

        return ReservationResource::collection($reservations);
    }

    public function store(CreateReservationRequest $request): JsonResponse
    {

        $reservation = Reservation::create($request->validated());
        $this->updateRoomPlacesObserver->removeQuantity($request->idChambre);
        return $this->responseCreated('Reservation created successfully', new ReservationResource($reservation));
    }

    public function show(Reservation $reservation): JsonResponse
    {
        return $this->responseSuccess(null, new ReservationResource($reservation));
    }

    public function update(UpdateReservationRequest $request, Reservation $reservation): JsonResponse
    {
        $reservation->update($request->validated());

        return $this->responseSuccess('Reservation updated Successfully', new ReservationResource($reservation));
    }

    /**
     * Summary of confirmer
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function confirmer() :JsonResponse {
        dd("holla");
        //$reservation->update(["status" => 1]);

     //   return $this->responseSuccess('reservation confirmé avec succces', new ReservationResource($reservation));

    }

        /**
     * Summary of annuler
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function annuler(Request $request) :JsonResponse {

    }

    public function destroy(Reservation $reservation): JsonResponse
    {
        $reservation->delete();

        return $this->responseDeleted();
    }

}
