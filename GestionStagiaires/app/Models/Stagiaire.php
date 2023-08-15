<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    /*
     * ralation extends
     */
    public function personnel()
    {
        return $this->belongsTo(Personnel::class);
    }
}

