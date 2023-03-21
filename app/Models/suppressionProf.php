<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppressionProf extends Model
{
    protected $table = 'prof'; // nom de la table dans la base de données

    public function supprimer($id)
    {
        $prof = $this->find($id);
        $prof->delete();
    }
}
