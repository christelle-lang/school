<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppression extends Model
{
    
    protected $table = 'cours'; // nom de la table dans la base de données

    public function supprimer($id)
    {
        $cours = $this->find($id);
        $cours->delete();
    }
}

