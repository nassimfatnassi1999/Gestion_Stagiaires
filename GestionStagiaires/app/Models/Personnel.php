<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personnel extends Model
{
    use HasFactory , softdeletes;
    protected $fillable=[
        'name',
        'email',
        'password',
        'role',
        'telephone',
        'universite',
        'niveau',
        'duree',
        'titre',
    ];
}