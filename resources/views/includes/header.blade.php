<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <button type="button" class="btn btn-warning btn-back"><</button>
            {{-- <img src="{{ asset('storage/images/logo.png') }}" alt="logo new wave"> --}}
            <div class="profile-info">
               <div classe="bonhomme">👤</div> Bobar Bonin
            </div>
        </ul>
    </div>
</div>

<style>

    img {
        width: 10%;
        max-width: 1000px;
    }

    .bonhomme {
    font-size: 200%; /* Double la taille du bonhomme */
}
   
    button.btn-login {
        margin-left: auto;
        margin-right: auto;
        display: block;
        margin-top: 10px;
    }

    .profile-info {
        margin-top: 5px;
        font-size: 14px;
        text-align: right;
    }

    button.btn-back {
        background-color: orange;
        color: white;
        border: none;
        margin-right: 10px;
    }

    @media (max-width: 767px) {
        .navbar-inner {
            text-align: center;
        }

        img {
            width: 50%;
        }

        button.btn-login {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .profile-info {
            text-align: center;
            margin-top: 5px;
        }
    }

    .navbar-inner {
        display: flex;
        justify-content: space-between; /* Aligner les éléments au début et à la fin */
        align-items: center; /* Aligner les éléments verticalement */
    }

    .nav {
        width: 100%; /* Assure que la liste des éléments occupe toute la largeur */
        display: flex; /* Affiche les éléments en ligne */
        align-items: center; /* Aligner les éléments verticalement */
    }

    .profile-info {
        margin-left: auto; /* Déplace l'élément à droite */
    }

    .btn-back {
        margin-right: 10px; /* Ajoute un espace après le bouton "Back" */
    }

</style>
