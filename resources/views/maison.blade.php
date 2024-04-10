

    @extends('layouts.default')
@section('content')
<div class="button-container">
    <button type="button" class="btn btmain btn-warning">CONCEPTS</button>
    <button type="button" class="btn btmain btn-warning">PARTICIPANTS</button>
</div>
<button type="button" class="btn btnbas btn-warning">TOUS LES EPISODES</button>
<button type="button" class="btn btnbas btn-warning">CONTACTS</button>

<h1>Page principale</h1>
<p>Bienvenue sur la page principale de notre site web. Vous pouvez naviguer sur les différentes pages en cliquant sur les liens ci-dessous.</p>
<p>Vous pouvez également vous connecter à votre compte ou vous inscrire si vous n'avez pas encore de compte.</p></br>
@stop

<style>

.button-container {
    display: inline-flex;
    justify-content: center;
}
.btmain {
   
    scale: 3;
}

.btnbas {
    
    display: inline-flex;
    justify-content: center;
    scale: 3;

}




</style>