<?php

namespace App\Actions;

use App\Models\Etudiant;

class EtudiantCheckAction
{
    public $etudiant;
    public function execute( $data)
    {
        $this->etudiant=  Etudiant::where("matricule",$data->matricule)->first();
        return ($this->etudiant != null) ? $this->etudiant : null;
    }
}
