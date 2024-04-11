@extends('layouts.default')
@section('content')

<div class="button-container">
    <div class="button-group">
        <button type="button" class="btn btmain btn-warning">CONCEPTS</button>
        <button type="button" class="btn btmain btn-warning">PARTICIPANTS</button>
    </div>
    <img src="{{ asset('storage/images/vote.png') }}" alt="vote for new wave">
    <div class="button-group">
        <button type="button" class="btn btmain btn-warning">TOUS LES EPISODES</button>
        <button type="button" class="btn btmain btn-warning">CONTACT</button>
    </div>
</div>

<h1>Page principale</h1>
<p>Bienvenue sur la page principale de notre site web. Vous pouvez naviguer sur les différentes pages en cliquant sur les liens ci-dessous.</p>
<p>Vous pouvez également vous connecter à votre compte ou vous inscrire si vous n'avez pas encore de compte.</p></br>
@stop

<style>

.button-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.button-group {
    display: flex;
    justify-content: center;
    margin-bottom: 10px;
}

@media screen and (min-width: 576px) {
    .button-container {
        flex-direction: row;
    }

    .button-group {
        margin-bottom: 0;
    }
}

</style>
