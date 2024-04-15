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
