<div class="navbar">
    <a href="/"><img src="{{ asset('storage/images/logo.png') }}" alt="logo new wave" class="logo"></a>
    <ul class="nav">
        <li class="back-button <?php if ($_SERVER['REQUEST_URI'] === '/') { echo 'hidden'; } ?>">
            <button type="button" class="btn btn-warning btn-back" id="back" onclick="window.history.back();">&lt;</button>
        </li>
        <li class="profile-info">
            <?php if (isset($_SESSION['user'])) { ?>
                <div class="user-profile">
                    <img src="{{ asset('storage/images/avatar.png') }}" alt="profil" id="avatar">
                    <p><?php echo $_SESSION['user']['name']; ?></p>
                </div>
            <?php } else { ?>
                <button type="button" class="btn btn-warning btn-login" onclick="window.location.href='/login'">Login</button>
            <?php } ?>
        </li>
    </ul>
</div>



<style>
.navbar {
    text-align: center;
    margin-left: 3%;
    margin-right: 3%;
}

.nav {
    list-style: none;
    display: flex;
    justify-content: space-between; /* Espace les éléments */
    align-items: center; /* Centre verticalement les éléments */
}

.nav li {
    margin-right: 10px; /* Ajoute un espace entre les éléments */
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
    background-color: var(--orange-2);
    color: white;
    border: none;
}

.btn-back:hover {
    background-color: var(--orange-1);
}

/* Classe pour masquer le bouton de retour */
.hidden {
    display: none;
}

</style>
