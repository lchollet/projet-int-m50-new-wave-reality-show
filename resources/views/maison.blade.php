@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
</head>
<body>
    <div id=container>
        <div class=home-huge-card>
                @component('components.huge-card', ['button' => 'Je vote!', 'background' => 'house.jpg', 'eventDate' => '26 apr', 'link' => '/vote', 'uniqueIdentifier' => 'un'])
                @endcomponent
            </a>
        </div>    
        <div id="first-double-row">
            @component('components.small-card', ['alt' => 'Logo de New Wave', 'image' => 'logo.png', 'texte' => 'Découvre le concept de l\'émission.', 'button' => 'Le concept', 'link' => '/concept'])
            @endcomponent
            @component('components.small-card', ['alt' => 'Icône représentant des participants', 'image' => 'vector-participants.png', 'texte' => 'Les participants de New Wave!', 'button' => 'Les participants', 'link' => '/participants'])
            @endcomponent
        </div>
        <div class=home-huge-card>
            @component('components.huge-card', ['button' => 'Je participe à une épreuve !', 'background' => 'robin-des-bois.png', 'eventDate' => '25 apr', 'link' => '/epreuves', 'uniqueIdentifier' => 'deux'])
            @endcomponent
        </div>
        <div id="second-double-row">
            @component('components.small-card', ['alt' => 'Icône d\'un écran', 'image' => 'watch.png', 'texte' => 'Reagarde nos épisodes gratuitement.', 'button' => 'Tous les épisodes', 'link' => '/tous_les_episodes'])
            @endcomponent
            @component('components.small-card', ['alt' => 'Icône d\'une lettre', 'image' => 'contact.png', 'texte' => 'Une demande?', 'button' => 'Nous contacter', 'link' => '/contact'])
            @endcomponent
        </div>
    </div>
</body>

@stop


<style>
    .huge-card-un{
        background-image: url("{{ asset('storage/images/house.jpg') }}");
        background-size: cover;
        padding: 0.5em;
        border-radius: 6px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 100%;
        margin: 0 auto;
        max-width: 40em;
        height: auto;
        padding: 2em;
}

    .huge-card-deux{
        background-image: url("{{ asset('storage/images/robin-des-bois.png') }}");
        background-size: cover;
        padding: 0.5em;
        border-radius: 6px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 100%;
        margin: 0 auto;
        max-width: 40em;
        height: auto;
        padding: 2em;
}

    .home-huge-card {
        width: 100%;
        margin: 1.5em;
    }

    #container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 1.5em;
        justify-content: space-evenly;
        margin-bottom: 2em;
        max-width: 95%;
        margin: auto;
        
    }

    #first-double-row{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 1em;
        max-width: 40em;
    }

    #second-double-row{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 0em 0em 1.5em 0em;
        max-width: 40em;
    }


</style>


