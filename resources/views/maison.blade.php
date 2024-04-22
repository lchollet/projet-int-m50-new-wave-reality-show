@extends('layouts.default')
@section('content')

<div class="button-container">
    <div class="button-group">
        <a href="/concept" class="btn btmain btn-warning">CONCEPTS</a>
        <a href="/participants" class="btn btmain btn-warning">PARTICIPANTS</a>
    </div>
    <img src="{{ asset('storage/images/vote.png') }}" alt="vote for new wave">
    <div class="button-group">
        <a href="/tous-les-episodes" class="btn btmain btn-warning bt2">TOUS LES EPISODES</a><br>
    </div>
    <div><a href="/contact" class="btn btmain btn-warning bt2">CONTACT</a></div>
</div>
@stop
<style>

.button-container  img{
    height: 300px;
    width: 350px;
}

.button-container  a{
    margin: 10px;
    padding: 10px;
    width: 200px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 10px;
    background-color: var(--orange-1);
    color: var(--white);
    text-decoration: none;
    text-align: center;
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
