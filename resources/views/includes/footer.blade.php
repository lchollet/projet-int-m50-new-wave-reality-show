<footer>
<a href="{{ route('maison') }}">Accueil</a></br>
<a href="{{ route('concept') }}">Concept</a></br>
<a href="{{ route('dernier_episode') }}">Dernier épisode</a></br>
<a href="{{ route('tous_les_episodes') }}">Tous les épisodes</a></br>
<a href="{{ route('contact') }}">Contact</a></br>
<a href="{{ route('dashboard') }}">Mon compte</a></br>
<a href="{{ route('info_generale') }}">Informations générales</a></br>
<a href="{{ route('parametre') }}">Paramètres</a></br>
<div id="copyright text-right">© Copyright 2024 new Wave </div>

</footer>

<style>

footer{
    background-color: black;
    width: 100%;
}

a{
    color: white;
    margin-left: 10%;
}

a:hover{
    color: red;
}

a:visited{
    color: white;
}

#copyright{
    color: white;
    margin-left: 10%;

}

a:active{
    color: red;
}


</style>