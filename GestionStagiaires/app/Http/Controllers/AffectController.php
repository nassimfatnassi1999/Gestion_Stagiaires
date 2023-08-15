<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class AffectController extends Controller
{
    /*
     * function to go affecter page
     */
    public function affecterPage(){
        $stag = Personnel::all()->where('role','=','stagiaire');
        $enca = Personnel::all()->where('role','=','encadrant');
        return view('affectation.affecter',compact('stag','enca'));
  }
  /*
   * function pour affecter un encadrant a un stagiaire
   */
    public function affecterEncadrant(Request $request)
    {
        // Vérifier si l'encadrant est déjà affecté au stagiaire
        $stagiaire = Personnel::find($request->stagiaire_id);
        if ($stagiaire->encadrant_id !== null) {
            return "L'encadrant est déjà affecté à ce stagiaire.";
        }
        //affecter lencadrant au stagiaire
        $stagiaire->encadrant_id = $request->encadrant_id;
        $stagiaire->save();
        return redirect()->route('consulterPage');
    }

    /*
     * function to go consulter page
     */
    public function consulterPage()
    {
        $enca = Personnel::where('role', 'encadrant')->get();
        $stag = [];
        foreach ($enca as $encadrant) {
            $stagiaires = Personnel::where('role', 'stagiaire')
                ->where('encadrant_id', $encadrant->id)
                ->get();
            $stag[$encadrant->id] = $stagiaires;
        }
        return view('affectation.consulter', compact('stag', 'enca'));
    }
    /*
     * function go affecter go page encadrant pour choisir encadrant
     */
    public function goAffecter($id){
        $users = Personnel::all()->where('role', 'encadrant');
        $stagiaire=Personnel::find($id);
        return view('affectation.choisirEncadrant',compact('users','stagiaire'));

    }
}
