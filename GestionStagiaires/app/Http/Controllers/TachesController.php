<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Tache;
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
    /*
     * function to go ajouter tache
     */
    public function ajouterTache($id){
        return view('taches.createTache',compact('id'));
    }

    /*
      * function to store tache in data base
      */
    public function storeTache(Request $request)
    {
        $tache = new Tache();
        $tache->titre = $request->input('titre');
        $tache->description = $request->input('description');
        $tache->stagiaire_id = $request->input('stagiaire_id');
        $tache->save();
        return redirect()->route('getAllStagiaires');
    }
    /*
     * function to get all taches de stagiaire specifier
     */
    public function getTacheDeStag($id)
    {
        $stagiaire = Personnel::find($id);
        $taches = $stagiaire->taches;
        return view('taches.ListeTachesPourStagiaire',compact('taches','stagiaire'));
    }
    /*
     * function to go page edit tache
     */
    public function editTache($id){
        $tache = Tache::find($id);
        return view('taches.editTache',compact('tache'));
    }
    /*
     * function to update tache
     */
    public function updateTache(Request $request,$id){
        $tache = Tache::find($id);
        $tache->update([
            'titre'=>$request->titre,
            'description'=>$request->description,
        ]);
        return redirect()->route('getAllStagiaires');
    }
    /*
     * function to delete tache
     */
    public function deleteTache($id)
    {
        $tache = Tache::find($id);
        $tache->delete();
        return redirect()->back();
    }
    /*
     * function to get all taches de stagiaire connecter
     */
    public function getAllTaches()
    {
        // Récupérer l'utilisateur connecté
        $user = auth()->user();
        $personnel = $user->personnel;
        // Récupérer toutes les tâches associées au personnel
            $taches = $personnel->taches()->get();
            return view('taches.ListesDesTaches',compact('taches'));
    }
    /*
     * function to mise a jour colunm dalse 0 to true 1 si la tache terminer
     */
    public function tacheTerminer($id){
        $tache = Tache::find($id);
        if($tache) {
            $tache->terminer = true;
            $tache->save();
            // Redirection ou affichage d'un message de succès
        } else {
            return response('error dans le methode tacher terminer');
        }
        return redirect()->route('getAllTaches');
    }
    public function tacheNonTerminer($id){
        $tache = Tache::find($id);
        if($tache) {
            $tache->terminer = false;
            $tache->save();
            // Redirection ou affichage d'un message de succès
        } else {
            return response('error dans le methode tache non terminer');
        }
        return redirect()->route('getAllTaches');
    }
}
