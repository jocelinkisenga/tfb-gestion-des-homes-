<?php

namespace App\Http\Controllers\Api;

use App\Actions\AuthAction;
use App\Actions\CreateEtudiantAction;
use App\Actions\EtudiantCheckAction;
use App\Actions\GenerateTokenAction;
use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticatedController extends Controller
{

    public $etudiant;

    public function __construct(
        public  AuthAction $authAction,
        public EtudiantCheckAction $etudiantCheckAction,
        public CreateEtudiantAction $createEtudiantAction,
        public GenerateTokenAction $generateTokenAction
    ) {
    }


    public function login(Request $request,)
    {

        try {
            if ($this->etudiantCheckAction->execute($request) != null) {
                $this->generateTokenAction->execute($request->matricule);
            } else if ($this->authAction->execute($request) != null and $this->etudiantCheckAction->execute($request) == null) {

                $this->createEtudiantAction->execute($this->authAction->execute($request));
                $this->generateTokenAction->execute($request->matricule);
            } else {
                return response()->json(["message" => "données non valide"]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function me(Request $request)
    {
        return $request->user();
    }
}
