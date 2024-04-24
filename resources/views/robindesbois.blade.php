@extends('layouts.default')
@section('content')
<div class="content">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<h1 class="title">Inscription à l'épreuve</h1>
    <div class="contestList">
        <div class="contestCard">
            <div class="contestTitleDiv">
                <p class="contestTitle">QUI SERA LE ROBIN DES BOIS ?</p>
        </div>
    </div>

    <!-- form -->
    <div>
        <!-- créer un champ nom, prénom email  -->

        <form id="eventFrom">
            @csrf
            <div class="formElement">
                <label  class="label" for="nom">Nom</label>
                <br>
                <input type="text" class="input" id="nom" name="nom" required>
            </div>

            <div class="formElement">
                <label  class="label" for="prenom">Prénom</label>
                <br>
                <input type="text" class="input" id="prenom" name="prenom" required>
            </div>

            <div class="formElement">
                <label  class="label" for="email">Email</label>
                <br>
                <input type="email" class="input" id="email" name="email" required>
            </div>

            <label class="label" >Participants</label> <br>

            <div class="select">
                <select name="numberOfParticipant" id="numberOfParticipants">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select> <br>
            </div>

                <button type="submit" class="send">Envoyer</button>
        </form>

    </div>
</div>
<!-- Ajouter un élément pour afficher le message de confirmation -->
<div id="confirmationMessage" class="modal">
    <div class="modal-content">
        <p id="confirmationText">Merci pour votre inscription ! Vous serez redirigez à la page d'accueil dans quelques secondes</p>
    </div>
</div>


<script>
    // Sélection du formulaire
    const form = document.getElementById('eventFrom');

// Ajout du gestionnaire d'événements pour l'événement "submit" du formulaire
form.addEventListener('submit', function(event) {
    // Empêcher la soumission du formulaire par défaut
    event.preventDefault();

    // Récupérer les valeurs des champs du formulaire
    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const email = document.getElementById('email').value;
    const numberOfParticipants = document.getElementById('numberOfParticipants').value;

    // Vous pouvez maintenant faire ce que vous voulez avec les données, par exemple, les afficher dans la console
    console.log("Nom:", nom);
    console.log("Prénom:", prenom);
    console.log("Email:", email);
    console.log("Nombre de participants:", numberOfParticipants);

    const confirmationMessage = document.getElementById('confirmationMessage');
    const confirmationText = document.getElementById('confirmationText');
    const message = `Merci ${prenom} ${nom} pour votre inscription ! Vous serez redirigé à la page d'accueil dans quelques secondes`;
    confirmationText.textContent = message;


    // Afficher le message de confirmation
    confirmationMessage.style.display = 'block';

    // Rediriger l'utilisateur vers la page d'accueil
    //after 5 seconds redirect to /
    setTimeout(function() {
        window.location.href = '/';
    }, 5000);
});
</script>


<style>
    .content{
        margin: 0px 30px 30px 30px;
    }

    .title{
        font-family: var(--h1-font-family);
        font-weight: var(--h1-font-weight);
        font-size: var(--h1-font-size);
    }

    .input{
        border: solid 1px black;
        width: 100%;
        height: 38px;
        border-radius: 7px;
        padding-left: 10px;

        font-family: var(--paragraphe-font-family);
        font-weight: var(--paragraphe-font-weight);
        font-size: var(--paragraphe-font-size);
    }

       .contestCard{
        position: relative;
        /* background-color: blue;  */
        background-image: url('{{ asset('storage/images/robin-des-bois.png') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

        height: 260px;
        border-radius: 6px; 
        padding: 13px;
        margin-bottom: 30px;

        display: flex;
        justify-content: center;
        align-items: center;
    }

   .contestTitleDiv{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .contestTitle{
        color: var(--white);
        font-family: var(--h1-font-family);
        font-size: var(--h1-font-size);
        font-weight: 1000;
    }

    .send{
        background-color: var(--orange-2);
        width: 100%;
        height: 60px;
        color: var(--white);
        border: none;
        border-radius: 7px;
        margin: 10px 0px 10px 0px;

        font-family: var(--paragraphe-font-family);
        font-size: var(--paragraphe-font-size);
    }

    .label{
        color: var(--orange-2);
        font-family: var(--paragraphe-font-family);
        font-weight: var(--paragraphe-font-weight);
        font-size: var(--paragraphe-font-size);

    }

    .formElement{
        margin-bottom: 20px;
    }

    /* MODAL */
    /* Style du modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5); /* fond semi-transparent */
}

/* Contenu du modal */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 80px;
    border: 1px solid #888;
    width: 80%;
}

#confirmationText{
    font-family: var(--paragraphe-font-family);
    font-weight: var(--paragraphe-font-weight);
    font-size: var(--paragraphe-font-size);
    color: var(--orange-1)
}

/* Fermer le bouton "X" */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* SELECT */
/* ------------- */
:root {
  --gray: var(--orange-3);
  --darkgray: var(--orange-3);
}

select {
  /* Reset Select */
  width: 100%;
  outline: 10px red;
  border: 0;
  box-shadow: none;
  /* Personalize */
  flex: 1;
  padding: 0 1em;
  color: #fff;
  border: solid 1px black;
  /* background-color: var(--orange-3);  */
  cursor: pointer;
  color: var(--back); 
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select wrapper */
.select {
  position: relative;
  display: flex;
  width: 20em;
  height: 3em;
  border-radius: .25em;
  overflow: hidden;
  margin-bottom: 20px
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 1em;
  background-color: var(--orange-2);
  transition: .25s all ease;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: white;
}
</style>
<!-- Participants Vaud -->
@stop
