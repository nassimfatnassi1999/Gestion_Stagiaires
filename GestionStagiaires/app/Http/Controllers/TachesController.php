<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class TachesController extends Controller
{
    /*
     * function to get all stagiaire affecter o encadrant connecter
     */
    public function getAllStagiaires()
    {
        // Récupérer l'utilisateur connecté
        $user = auth()->user();
        $personnel = $user->personnel;

        // Récupérer les stagiaires associés à l'utilisateur connecté
        $stagiaires = Personnel::where('encadrant_id', $personnel->id)->get();
        return view('taches.ListeStagiaire',compact('stagiaires'));
    }
}
