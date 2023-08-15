<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $fillable=[
        'date_debut',
        'date_fin',
        'type',
    ];
    public function sujet(){
        return $this->hasOne(Sujet::class);
    }
}
