<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enregistrement extends Model
    
{
    protected $fillable = ['nom','info',];
    
    public function modifier($nom,$info)
    {
        $this->nom = $nom;
        $this->save();
        $this->onfo = $info;
        $this->save();
    }

}
