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
        <div class="options-container">
            <h2>Quelle participant fera le défi d’aujourd’hui les yeux bandés ?</h2>
            <button class="option-button" onclick="submitVote('Bonar')">Bonar</button>
            <button class="option-button" onclick="submitVote('Bionel')">Bionel</button>
            <button class="option-button" onclick="submitVote('Bacha')">Bacha</button>
        </div>
        <p id="vote-message" style="display: none;">Merci pour votre vote. Les résultats auront lieu dans 24 heures.</p>
    </div>

    <script>
        function submitVote(option) {
            // Ici, vous enverrez l'option sélectionnée au serveur pour enregistrer la réponse.
            // Pour cet exemple, nous affichons simplement le message de confirmation.
            document.getElementById('vote-message').style.display = 'block';
            document.querySelector('.options-container').innerHTML = ''; // Effacer les boutons d'options
        }
    </script>
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
