<?php

namespace App\Actions;

use App\Models\EtudiantUnilu;

class AuthAction
{
    public $etudiant;
    public function execute($data)
    {
      $this->etudiant=  EtudiantUnilu::where("matricule",$data->matricule)
                                        ->where("password",$data->password)
                                        ->where("status",1)->first();
                                        
        return ($this->etudiant != null) ? $this->etudiant : null;
    }
}
