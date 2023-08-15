<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Sujet;
use Illuminate\Http\Request;

class StageSujetController extends Controller
{
    /*
     * page ajouter sujet
     */
    public function ajouterSujetPage(){
        return view('sujet.ajouterSujet');
    }
    /*
     * create sujet dans le base de données
     */
    public function createSujet(Request $request){
        Sujet::create([
           'titre'=>$request->titre,
           'description'=>$request->description,
        ]);
        return redirect()->route('getAllSujet');
    }
    /*
     * to get all sujet
     */
    public function getAllSujet(){
        $all = Sujet::all();
        return view('sujet.consulterSujet',compact('all'));
    }
    /*
     * fo affecter sujet
     */
    public function goAffecterSujet($id){
        $stagiaire = Personnel::find($id);
        $sujets = Sujet::all();
        return view('affectation.choisirSujet',compact('stagiaire','sujets'));
    }
    /*
     * affecter sujet a un stagiaire
     */
    public function AffecterSujet(Request $request){
        // Vérifier si le sujet est déjà affecté au stagiaire
        $stagiaire = Personnel::find($request->stagiaire_id);
        if ($stagiaire->sujet_id !== null) {
            return "le sujet est déjà affecté à ce stagiaire.";
        }
        //affecter lencadrant au stagiaire
        $stagiaire->sujet_id = $request->sujet_id;
        $stagiaire->save();
        return redirect()->route('affecterPage');
    }
}
