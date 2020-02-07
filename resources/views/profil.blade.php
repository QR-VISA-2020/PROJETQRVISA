@extends('layourt')
@section('content')
        <!--navigtion bar-->
        <div class="">
            <div>
                <nav class="navigation">
                    <div class="center-div">
                        <ul class="">
                            <li>                               
                                <a href="profil.html" class="actives"><i class="fa fa-user"></i><br>Profil </a>
                            </li>
                            <li>                               
                                <a href="profil_academique.html"> <i class="fa fa-list"></i><br>Notes </a>
                            </li>
                            <li>                        
                                <a href="lien_utile.html"><i class="fa fa-share"></i><br>Liens utiles</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>           
        </div>

        <!--student profile view-->
        <section class="section-profile">
            <div class="uk-flex uk-height-medium uk-margin uk-text-center uk-margin-large-top">
                <div class="uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s">
                    <div class="uk-margin-auto-left uk-margin-auto-horizontal uk-background-primary">
                        <img  class="profile-image" src="image/craft200.png">
                    </div>
                    <hr class="uk-divider-icon">
                    @foreach($etudiants as $etudiant)
                        @if ($etudiant->MATRICULE ="16A107")
                        <div class="uk-margin-small-top body">
                            <div class="">
                                <span class="uk-span uk-text-uppercase ">Nom et Prenom</span><br>
                                <span class="uk-span uk-text-uppercase uk-text-primary">{{$etudiant->NOM}}</span>
                            </div>
                            <hr class="uk-divider-small">
                            <div class="">   
                                <span class="uk-span uk-text-uppercase ">Matricule</span><br>
                                <span class="uk-span uk-text-primary">{{$etudiant->MATRICULE}}</span>
                            </div>
                            <hr class="uk-divider-small">
                            <div>   
                                <span class="uk-span uk-text-uppercase ">Faculté</span><br>
                                <span class="uk-span uk-text-uppercase uk-text-primary">FALSH</span>
                            </div>
                            <hr class="uk-divider-small">
                            <div>   
                                <span class="uk-span uk-text-uppercase ">langue</span><br>
                                <span class="uk-span uk-text-uppercase uk-text-primary">{{$etudiant->LANGUE}}</span>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
@endsection
