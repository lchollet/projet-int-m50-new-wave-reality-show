@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Répondre au vote</title>
</head>
<body>
    <div class="response-container">
        <h1>Répondre au vote</h1>
        @if ($lastQuestion)
        <form action="/submit-vote" method="POST" id="vote-form">
            @csrf 
            <div class="options-container">
                <h2>{{ $lastQuestion->text_question }}</h2>
                @if ($options)
                @foreach($options as $option)
                <button class="option-button" name="option" value="{{ $option->id }}">{{ $option->answer }}</button>
                @endforeach
                @else
                <p>Aucune option disponible pour ce vote.</p>
                @endif
            </div>
            <p id="vote-message" style="display: none;">Merci pour votre vote. Les résultats auront lieu dans 24 heures.</p>
            <button type="submit">Soumettre</button>
        </form>
        @else
        <p>Aucun vote disponible actuellement.</p>
        @endif
    </div>

</body>
</html>
@stop

<style>
.response-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    /* background-color: var(--orange-1); */ /* Fond orange */
    border-radius: 10px;
    color: var(--orange-2) /* Texte blanc */
   
}

.response-container h1 {
    color: var(--black); /* Titre noir */
}

.options-container {
    margin-top: 20px;
}

.options-container h2 {
    margin-bottom: 10px;
    font-weight: var(--paragraphe-font-weight);
}

.option-button {
    margin-bottom: 10px;
    width: 100%; /* Prendre la largeur complète */
    padding: 10px;
    background-color: var(--orange-2); /* Boutons avec fond orange plus clair */
    color: var(--white);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: var(--paragraphe-font-weight);
}

.option-button:hover {
    background-color: var(--orange-3); /* Couleur de survol plus foncée */
}

#vote-message {
    margin-top: 20px;
    font-weight: var(--paragraphe-font-weight);
}
</style>
