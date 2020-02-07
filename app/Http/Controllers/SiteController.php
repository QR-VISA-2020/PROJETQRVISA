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
}
