<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Maison - page principale') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1>Page principale</h1>
                <p>Bienvenue sur la page principale de notre site web. Vous pouvez naviguer sur les différentes pages en cliquant sur les liens ci-dessous.</p>
                <p>Vous pouvez également vous connecter à votre compte ou vous inscrire si vous n'avez pas encore de compte.</p></br>

                <a href="{{ route('maison') }}">Accueil</a></br>
                <a href="{{ route('concept') }}">Concept</a></br>
                <a href="{{ route('dernier_episode') }}">Dernier épisode</a></br>
                <a href="{{ route('tous_les_episodes') }}">Tous les épisodes</a></br>
                <a href="{{ route('contact') }}">Contact</a></br>
                <a href="{{ route('connexion') }}">Connexion</a></br>
                <a href="{{ route('mon_compte') }}">Mon compte</a></br>
                <a href="{{ route('info_generale') }}">Informations générales</a></br>
                <a href="{{ route('parametre') }}">Paramètres</a></br>
            </div>
        </div>
    </div>
</x-app-layout>

