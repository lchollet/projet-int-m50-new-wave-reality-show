@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Créer un vote</title>
</head>
<body>
    <div class="vote-container">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <h1>Créer un vote</h1>
        <form action="/creationvote" method="post">
            @csrf
            <div class="form-group">
                <label for="text_question">titre du vote</label>
                <input type="text" id="text_question" name="text_question" placeholder="Entrer le titre du vote" required>
            </div>
            <div class="form-group">
                <label for="start_date">Date de début</label>
                <input type="date" id="start_date" name="start_date" required>
            </div>
            <div class="form-group">
                <label for="end_date">Date de fin</label>
                <input type="date" id="end_date" name="end_date" required>
            </div>
            <div class="form-group options-group">
                <label>Options de réponse</label>
                <div class="options-container">
                    <div class="option">
                        <input type="text" name="option[]" placeholder="Option 1" required>
                    </div>
                    <div class="option">
                        <input type="text" name="option[]" placeholder="Option 2" required>
                    </div>
                </div>
                <!-- Bouton pour ajouter une nouvelle option -->
                <button type="button" class="btn-add-option">Ajouter une option</button>
            </div>
            <button type="submit" class="btn-submit">Créer le vote</button>
        </form>
    </div>
</body>
</html>
@stop

<style>
.vote-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: var(--white);
    border-radius: 10px;
    color: var(--orange-1);
}

.vote-container h1 {
    text-align: left;
    color: var(--black);
}

.vote-container form {
    padding-right: 20px;
    padding-left: 20px;
}

.vote-container .form-group {
    margin-bottom: 20px;
}

.vote-container label {
    display: block;
    margin-bottom: 5px;
    font-weight: var(--paragraphe-font-weight);
}

.vote-container input[type="text"],
.vote-container input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid var(--grey);
    border-radius: 5px;
    color: var(--black); 
}

.vote-container .options-group .option {
    margin-bottom: 10px;
}

.vote-container .btn-submit {
    width: 100%;
    padding: 10px;
    background-color: var(--orange-1);
    color: var(--white);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: var(--paragraphe-font-weight);
}

.vote-container .btn-submit:hover {
    background-color: var(--orange-2);
}

.btn-add-option {
    background-color: var(--grey);
    color: var(--white);
    border: none;
    border-radius: 5px;
    padding: 8px 15px;
    cursor: pointer;
    font-size: 14px;
    font-weight: var(--paragraphe-font-weight);
    margin-top: 10px;
}

.btn-add-option:hover {
    background-color: var(--dark-grey);
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const addButton = document.querySelector('.btn-add-option');
    const optionsGroup = document.querySelector('.options-group');
    const optionsContainer = document.querySelector('.options-container');
    let optionCount = 2; // Initial count of options (assuming two options already present)

    addButton.addEventListener('click', function () {
        optionCount++;
        const newOption = document.createElement('div');
        newOption.classList.add('option');
        newOption.innerHTML = `
            <input type="text" name="option[]" placeholder="Option ${optionCount}" required>
            <button type="button" class="btn-remove-option">Supprimer</button>
        `;
        optionsContainer.appendChild(newOption);
    });

    // Supprimer une option
    optionsGroup.addEventListener('click', function (event) {
        if (event.target.classList.contains('btn-remove-option')) {
            const option = event.target.closest('.option');
            option.remove();
            optionCount--;
        }
    });
});
</script>
