<?php

use App\Http\Controllers\PersoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //
    Route::get('/GestionStagiaires', function () {
        return view('acceuil');
    })->name('Gestionstag');
    //route PersonnelController
    Route::controller(PersoController::class)->group(function (){
        //archive
        Route::get('/archive/restore/{id}','restore')->name('restore');
        Route::get('/archive','showSoftdeletes')->name('archive');
        Route::get('/users/forcedelete/{id}','forceDelete')->name('forceDelete');
        Route::get('/users/deleteAll','deleteAll')->name('deleteAll');
        Route::get('/logout','logoutn')->name('logoutn');
        //stagiare********************************************************************************
        Route::get('/users/createS','createS');
        Route::get('/users/indexS','indexS')->name('stagiaires');
        Route::post('/users/storeS','storeS')->name('storeS');
        Route::get('/users/editS/{id}','editS')->name('editStagiaire');
        Route::put('/users/updateS/{id}','updateS')->name('updateStagiaire');
        Route::delete('/users/destroyS/{id}','destroyS')->name('destroyStagiaire');
        //encadrant***************************************************************************
        Route::get('/users/indexE','indexE')->name('encadrants');
        Route::post('/users/storeE','storeE')->name('storeE');
        Route::get('/users/createE','createE');
        Route::get('/users/editE/{id}','editE')->name('editEncadrant');
        Route::put('/users/updateE/{id}','updateE')->name('updateEncadrant');
        Route::delete('/users/destroyE/{id}','destroyE')->name('destroyEncadrant');

    });
});
