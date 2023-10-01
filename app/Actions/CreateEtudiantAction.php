<?php

namespace App\Actions;

use App\Enums\RoleEnum;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Hash;

class CreateEtudiantAction
{
    public function execute( $data)
    {
        if($data != null){
            Etudiant::create([
                'nom' => $data->nom,
                'matricule' => $data->matricule,
                'promotion' => $data->promotion,
                'faculte' => $data->faculte,
                'password' => Hash::make($data->password),
                'role_id' => RoleEnum::ETUDIANT,
            ]);
        }
    }
}
