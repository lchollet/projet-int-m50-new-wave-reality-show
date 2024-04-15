@extends('layouts.default')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <h1>Les épisodes</h1>
    <div class="episode-list">
        @component('components.episode', ['title' => 'Ep.1 - Découverte', 'image' => 'house.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.2 - Embrouilles', 'image' => 'lac.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.3 - La course', 'image' => 'kart.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.4 - En détente', 'image' => 'detente.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.5 - Le gros repas', 'image' => 'table.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.6 - Adieu', 'image' => '911.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.7 - La tarte', 'image' => 'claque.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.8 - La Surprise', 'image' => 'homme.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.9 - Suspens', 'image' => 'course.jpg'])
        @endcomponent
        @component('components.episode', ['title' => 'Ep.10 - La Finale (18.06.26)', 'image' => 'prix.jpg'])
        @endcomponent
    </div>

    <style>
        .episode-list {
            display: flex;
            flex-wrap: wrap;
        }

        .episode-list>* {
            flex: 0 0 50%;
        }
        h1 {
            font-size: 4em;
            font-weight: bold;
        }
    </style>
@stop
