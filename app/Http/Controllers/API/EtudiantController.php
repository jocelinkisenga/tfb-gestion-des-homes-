<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Etudiant\CreateEtudiantRequest;
use App\Http\Requests\Etudiant\UpdateEtudiantRequest;
use App\Http\Resources\Etudiant\EtudiantResource;
use App\Models\Etudiant;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection 
    {
        $etudiants = Etudiant::useFilters()->dynamicPaginate();

        return EtudiantResource::collection($etudiants);
    }

    public function store(CreateEtudiantRequest $request): JsonResponse
    {
        $etudiant = Etudiant::create($request->validated());

        return $this->responseCreated('Etudiant created successfully', new EtudiantResource($etudiant));
    }

    public function show(Etudiant $etudiant): JsonResponse
    {
        return $this->responseSuccess(null, new EtudiantResource($etudiant));
    }

    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant): JsonResponse
    {
        $etudiant->update($request->validated());

        return $this->responseSuccess('Etudiant updated Successfully', new EtudiantResource($etudiant));
    }

    public function destroy(Etudiant $etudiant): JsonResponse
    {
        $etudiant->delete();

        return $this->responseDeleted();
    }

}
