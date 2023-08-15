<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    use HasFactory;
    protected $fillable=[
      'titre',
      'description',
    ];
    public function stage(){
        return $this->hasOne(Stage::class);
    }
}
