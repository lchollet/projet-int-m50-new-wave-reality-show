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
            <a href="/vote">
                @component('components.huge-card', ['button' => 'Je vote!', 'background' => 'house.jpg', 'eventDate' => '27 dec'])
                @endcomponent
            </a>
        </div>    
        <div id="first-double-row">
            @component('components.small-card', ['alt' => 'Logo de New Wave', 'image' => 'logo.png', 'texte' => 'Découvre le concept de l\'émission.', 'button' => 'Le concept'])
            @endcomponent
            @component('components.small-card', ['alt' => 'Icône représentant des participants', 'image' => 'vector-participants.png', 'texte' => 'Les participants de New Wave!', 'button' => 'Les participants'])
            @endcomponent
        </div>
        <div class=home-huge-card>
            @component('components.huge-card', ['button' => 'Je participe à une épreuve !', 'background' => 'robin-des-bois.png', 'eventDate' => '27 dec'])
            @endcomponent
        </div>
        <div id="second-double-row">
            @component('components.small-card', ['alt' => 'Icône d\'un écran', 'image' => 'watch.png', 'texte' => 'Reagarde nos épisodes gratuitement.', 'button' => 'Tous les épisodes'])
            @endcomponent
            @component('components.small-card', ['alt' => 'Icône d\'une lettre', 'image' => 'contact.png', 'texte' => 'Une demande?', 'button' => 'Nous contacter'])
            @endcomponent
        </div>
    </div>
</body>

@stop


<style>

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
    }

    #first-double-row{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 1em;
    }

    #second-double-row{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        margin: 0em 1.5em 1.5em 1.5em;
    }


</style>


