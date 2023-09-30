<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Logement\CreateLogementRequest;
use App\Http\Requests\Logement\UpdateLogementRequest;
use App\Http\Resources\Logement\LogementResource;
use App\Models\Logement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection 
    {
        $logements = Logement::useFilters()->dynamicPaginate();

        return LogementResource::collection($logements);
    }

    public function store(CreateLogementRequest $request): JsonResponse
    {
        $logement = Logement::create($request->validated());

        return $this->responseCreated('Logement created successfully', new LogementResource($logement));
    }

    public function show(Logement $logement): JsonResponse
    {
        return $this->responseSuccess(null, new LogementResource($logement));
    }

    public function update(UpdateLogementRequest $request, Logement $logement): JsonResponse
    {
        $logement->update($request->validated());

        return $this->responseSuccess('Logement updated Successfully', new LogementResource($logement));
    }

    public function destroy(Logement $logement): JsonResponse
    {
        $logement->delete();

        return $this->responseDeleted();
    }

}
