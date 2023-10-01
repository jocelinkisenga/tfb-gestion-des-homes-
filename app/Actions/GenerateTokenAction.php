<?php

namespace App\Actions;
use App\Models\Etudiant;

class GenerateTokenAction
{
    public $etudiant;
    public function execute( $data)
    {
        $this->etudiant = Etudiant::whereMatricule($data)->first();
        $token = $this->etudiant->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}
