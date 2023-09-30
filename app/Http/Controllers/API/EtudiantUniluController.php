<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EtudiantUnilu\CreateEtudiantUniluRequest;
use App\Http\Requests\EtudiantUnilu\UpdateEtudiantUniluRequest;
use App\Http\Resources\EtudiantUnilu\EtudiantUniluResource;
use App\Models\EtudiantUnilu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Request;

class EtudiantUniluController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection 
    {
        $etudiantUnilus = EtudiantUnilu::useFilters()->dynamicPaginate();

        return EtudiantUniluResource::collection($etudiantUnilus);
    }

    public function store(CreateEtudiantUniluRequest $request): JsonResponse
    {
        $etudiantUnilu = EtudiantUnilu::create($request->validated());

        return $this->responseCreated('EtudiantUnilu created successfully', new EtudiantUniluResource($etudiantUnilu));
    }

    public function show(EtudiantUnilu $etudiantUnilu): JsonResponse
    {
        return $this->responseSuccess(null, new EtudiantUniluResource($etudiantUnilu));
    }

    public function update(UpdateEtudiantUniluRequest $request, EtudiantUnilu $etudiantUnilu): JsonResponse
    {
        $etudiantUnilu->update($request->validated());

        return $this->responseSuccess('EtudiantUnilu updated Successfully', new EtudiantUniluResource($etudiantUnilu));
    }

    public function destroy(EtudiantUnilu $etudiantUnilu): JsonResponse
    {
        $etudiantUnilu->delete();

        return $this->responseDeleted();
    }

}
