@extends('layourt')
@section('content')

        <!--navigtion bar-->
        <div class="">
            <div>
                <nav class="navigation">
                    <div class="center-div">
                        <ul class="">
                            <li>                               
                                <a href="profil.html" class="actives"><i class="fa fa-user"></i><br>profil scolaire</a>
                            </li>
                            <li>                               
                                <a href="profil_academique.html"> <i class="fa fa-list"></i><br>notes scolaire</a>
                            </li>
                            <li>                        
                                <a href="lien_utile.html"><i class="fa fa-share"></i><br>Liens utiles</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>           
        </div>

        <!--some list if useful links-->
        <section class="section-links">
            <div class="">
                <div class="uk-background-primary">Liens utiles</div>  
                <ul class="uk-list uk-list-striped">
                    <li><a href="http://www.uy1.uninet.cm/">Universite de Yaounde 1</a></li>
                    <li><a href="http://www.biblio-uy1.uninet.cm/">Bibliotheque</a></li>
                    <li><a href="https://www.elsevier.com/en-xm">Elsevier</a></li>
                    <li><a href="https://www.moodle.org/login/index.php/">Moodle</a></li>
                    <li><a href="https://hal.archives-ouvertes.fr/">Archives ouvertes</a></li>
                </ul> 
            </div>           
        </section>
    </body>
</html>

