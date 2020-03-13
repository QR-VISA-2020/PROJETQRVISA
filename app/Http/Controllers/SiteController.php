<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Etudiant;


class SiteController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function profil()
    {
        $etudiants = Etudiant::all();
        
        return view('profil',compact('etudiants'));
    }
    public function lien_utile()
    {


        return view('lien_utile');
    }
    public function profil_academique()
    {


        return view('profil_academique');
    }
}
