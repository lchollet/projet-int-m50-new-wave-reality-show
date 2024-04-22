@extends('layouts.default')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="episode-container">
    <h1 id="title-episodes">Les épisodes</h1>
    <div class="episode-list">
        @component('components.episode', ['title' => 'Ep.1 - Qui arrivera le premier dans la ville?', 'image' => 'ville.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.2 - Qui sera le Robin des Bois?', 'image' => 'bois.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.3 - Qui seront les maîtres vendeurs?', 'image' => 'vendeur.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.4 - Le Flottant du lac', 'image' => 'lac.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.5 - Qui orchestrera la soirée la plus mémorable ?', 'image' => 'memorable.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.6 - Parcours de l’impossible', 'image' => 'impossible.png'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.7 - Chasse au trésor', 'image' => 'tresor.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.8 - Date ', 'image' => 'date.png'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.9 - Les masques tombent', 'image' => 'tombe.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.10 - La Finale', 'image' => 'finale.jpg'])
        @endcomponent
    </div>
    </div>

    <style>

        .episode-container{
            max-width: 65%;
            margin: auto;
            margin-top: 1.5em;
        }

        .episode-list {
            display: column;
            flex-wrap: wrap;
            justify-content: space-evenly;

        }

        .episode-list>* {
            flex: 0 0 50%;
        }
        h1 {
            font-family: var(--h1-font-family);
            font-weight: var(--h1-font-weight);
            font-size: var(--h1-font-size);
            letter-spacing: var(--h1-letter-spacing);
            line-height: var(--h1-line-height);
            font-style: var(--h1-font-style);
        }

        #title-episodes {
            margin-bottom: 1.5em;
        }
    </style>
@stop
