<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encadrant extends Model
{
    use HasFactory;
    public function stagiaires()
    {
        return $this->hasMany(Stagiaire::class);
    }
}
