<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PersoController extends Controller
{
    /*
         * function to get all stagiaires
         */
    public function indexS(){
        $users=Personnel::get()->where('role','stagiaire');
        return view('stagiaires.stagiare',compact('users'));
    }
    /*
     * function to go create stagiaire page
     */
    public function createS(){
        return view('stagiaires.create');
    }
    /*
     * function to store stagiaire in data base
     */
    public function storeS(Request $request){
        $user =Personnel::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => bcrypt($request->password),
            'telephone'=>$request->telephone,
            'role'=>'stagiaire',
            'universite'=>$request->universite,
            'niveau'=>$request->niveau,
            'duree'=>$request->duree,
        ]);
        return redirect()->route('stagiaires');
    }
    /*
     * function to edit stagiaire
     */
    public  function editS($id){
        $user=Personnel::findOrfail($id);
        return view('stagiaires.edit_stagiaire',compact('user'));
    }
    /*
     * function to update encadrant
     */
    public function updateS(Request $request,$id){
        $user=Personnel::findOrfail($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'telephone'=>$request->telephone,
            'role'=>$request->role,
            'universite'=>$request->universite,
            'niveau'=>$request->niveau,
            'duree'=>$request->duree,
        ]);
        return redirect()->route('stagiaires');
    }
    /**
     * Remove Stagiaire
     */
    public function destroyS($id)
    {
        Personnel::findOrfail($id)->delete();
        return redirect()->route('stagiaires');
    }



////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /*
   * function to get all Encadrants
   */
    public function indexE(){
        $users=Personnel::get()->where('role','encadrant');
        return view('encadrants.encadrant',compact('users'));
    }
    /*
     * function to go create encadrant page
     */
    public function createE(){
        return view('encadrants.create_encadrant');
    }
    /*
     * function to store encadrant in data base
     */
    public function storeE(Request $request){
        $user =Personnel::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'telephone'=>$request->telephone,
            'role'=>'encadrant',
            'titre'=>$request->titre,
        ]);
        return redirect()->route('encadrants');
    }
    /*
     * function to edit encadrant
     */
    public  function editE($id){
        $user=Personnel::findOrfail($id);
        return view('encadrants.edit_encadrant',compact('user'));
    }
    /*
     * function to update encadrant
     */
    public function updateE(Request $request,$id){
        $user=Personnel::findOrfail($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'telephone'=>$request->telephone,
            'role'=>$request->role,
            'titre'=>$request->titre,
        ]);
        return redirect()->route('encadrants');
    }
    /**
     * Remove encadrant.
     */
    public function destroyE($id)
    {
        Personnel::findOrfail($id)->delete();
        return redirect()->route('encadrants');
    }

//    //////////////////////////////////////////////////////////////////////////////////////////
    /*
     * only trashed
     */
    public function showSoftdeletes(){
        $users=Personnel::onlyTrashed()->get();
        return view('archive',compact('users'));
    }
    /*
     * function ro restore data from softdelete to table
     */
    public function restore($id){
        Personnel::withTrashed()->where('id',$id)->restore();
        return redirect()->back();

    }
    /*
     * function t destroy data from softdelete and table
     */
    public function forceDelete($id){
        Personnel::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }
    /*
     * function delete all with truncate
     */
    public function deleteAll(){
        DB::table('personnels')->truncate();
        return redirect()->back();
    }
    /*
     * function log out
     */
    public function logoutn()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

}
