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
        'user_id',
    ];
    /*
     * relation extend
     */
    public function encadrant()
    {
        return $this->hasMany(Stagiaire::class, 'encadrant_id');
    }
    public function sujet()
    {
        return $this->belongsTo(Sujet::class);
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
