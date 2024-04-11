<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <button type="button" class="btn btn-warning btn-login" href="login">Connexion</button>
            <img src="{{ asset('storage/images/logo.png') }}" alt="logo new wave">
        </ul>
    </div>
</div>

<style>
    img {
        width: 10%;
        max-width: 1000px;
    }

    button.btn-login {
        margin-left: auto;
        margin-right: auto;
        display: block;
        margin-top: 10px;
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
    }
</style>