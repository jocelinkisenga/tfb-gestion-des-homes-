<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rservation\CreateRservationRequest;
use App\Http\Requests\Rservation\UpdateRservationRequest;
use App\Http\Resources\Rservation\RservationResource;
use App\Models\Rservation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Request;

class RservationController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection 
    {
        $rservations = Rservation::useFilters()->dynamicPaginate();

        return RservationResource::collection($rservations);
    }

    public function store(CreateRservationRequest $request): JsonResponse
    {
        $rservation = Rservation::create($request->validated());

        return $this->responseCreated('Rservation created successfully', new RservationResource($rservation));
    }

    public function show(Rservation $rservation): JsonResponse
    {
        return $this->responseSuccess(null, new RservationResource($rservation));
    }

    public function update(UpdateRservationRequest $request, Rservation $rservation): JsonResponse
    {
        $rservation->update($request->validated());

        return $this->responseSuccess('Rservation updated Successfully', new RservationResource($rservation));
    }

    public function destroy(Rservation $rservation): JsonResponse
    {
        $rservation->delete();

        return $this->responseDeleted();
    }

}
