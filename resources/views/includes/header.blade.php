<div class="navbar">
    <ul class="nav">
        <li class="back-button <?php if ($_SERVER['REQUEST_URI'] === '/') { echo 'hidden'; } ?>">
            <button type="button" class="btn btn-warning btn-back" id="back" onclick="window.history.back();"><img src="{{ asset('storage/images/Arrow.png') }}" alt="back arrow" class="arrow"></button>
        </li >
        <li class="empty">
        </li>
        <li class="empty">
        </li>
        <li class="profile-info">
            <?php if (isset($_SESSION['name'])) { ?>
                <div class="user-profile">
                    <img src="{{ asset('storage/images/avatar.png') }}" alt="profil" id="avatar">
                    <p><?php echo $_SESSION['name']; ?></p> <!-- Afficher le nom d'utilisateur -->
                </div>
            <?php } else { ?>
                <button type="button" class="btn btn-warning btn-login" onclick="window.location.href='/login'">Login</button>
            <?php } ?>
        </li>        
    </ul>
    <a href="/"><img src="{{ asset('storage/images/logo.png') }}" alt="logo new wave" class="logo"></a>
</div>



<style>
.navbar {
    text-align: center;
    margin-top: 3%;
    margin-left: 3%;
    margin-right: 3%;
}

.nav {
    display: flex;
    justify-content: space-between;
    padding: 0 3%; /* Ajout de padding pour conserver les marges latérales */
}

.back-button {
    margin-right: auto; /* Force le bouton de retour à rester à gauche */
}

.profile-info {
    margin-left: auto; /* Force le bouton de profil à rester à droite */
}


#avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

button.btn-login {
    background-color: var(--orange-2);
}

button.btn-login:hover {
    background-color: var(--orange-1);
}

.btn-back {
    background-color: transparent;
    color: transparent;
    border: none;
}

.logo {
    width: 200px;
}



/* Classe pour masquer le bouton de retour */
.hidden {
    display: none;
}

</style>
