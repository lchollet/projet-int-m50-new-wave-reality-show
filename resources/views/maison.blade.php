@extends('layouts.default')
@section('content')

<div class="button-container">
    <div class="button-group">
        <button type="button" class="btn btmain btn-warning">CONCEPTS</button>
        <button type="button" class="btn btmain btn-warning">PARTICIPANTS</button>
    </div>
    <img src="{{ asset('storage/images/vote.png') }}" alt="vote for new wave">
    <div class="button-group">
        <button type="button" class="btn btmain btn-warning bt2">TOUS LES EPISODES</button><br>
    </div>
    <div><button type="button" class="btn btmain btn-warning bt2">CONTACT</button></div>
</div>
@stop

<style>

.button-container  img{

    height: 300px;
    width: 350px;
 
}

.button-container  button{

    margin: 10px;
    padding: 10px;
    width: 200px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 10px;
    background-color: var(--orange-1);
    color: var(--white);
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;

}
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
        flex-direction: column;
    }

    .button-group {
        margin-bottom: 0;
    }
}



</style>
