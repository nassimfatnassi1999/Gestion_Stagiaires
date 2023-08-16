<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Stage;
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
    /*
     * function to edit sujet
     */
    public function editSujet($id){
        $sujet = Sujet::find($id);
        return view('sujet.editSujet',compact('sujet'));
    }
    /*
     * function to update sujet
     */
    public function updateSujet(Request $request,$id){
        $suj = Sujet::find($id);
        $suj->update([
            'titre'=>$request->titre,
            'description'=>$request->description,
        ]);
        return redirect()->route('getAllSujet');
    }
    /**
     * Remove Sujet
     */
    public function destroySujet($id)
    {
        Sujet::findOrfail($id)->delete();
        return redirect()->route('getAllSujet');
    }
    /*
     * rejeter encadrant
     */
    public function RejeterEncadrant($id){
        $stagiaire = Personnel::find($id);
        if ($stagiaire->encadrant_id === null) {
            return "Le stagiaire n'est pas affecté à un encadrant.";
        }
        $stagiaire->encadrant_id = null;
        $stagiaire->save();
        return redirect()->route('affecterPage');
    }
    /*
     * rejeter sujet
     */
    public function RejeterSujet($id){
        $stagiaire = Personnel::find($id);
        if ($stagiaire->sujet_id === null) {
            return "Le stagiaire n'est pas affecté à un sujet.";
        }
        $stagiaire->sujet_id = null;
        $stagiaire->save();

        return redirect()->route('affecterPage');
    }
    public  function test(){
       $sujet = Sujet::find(1);
        $stage = $sujet->stage;
        $personnels = $sujet->personnel;
        //te5dem djib les personnnels o djib stage
        return   $personnels;
    }
}
