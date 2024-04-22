@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
</head>
<body>
<div class="home-container">
    <div class="button-container">
        <a href="/concept" class="home-btn" id="concept-btn">CONCEPTS</a>
        <a href="/participants" class="home-btn" id="participants-btn">PARTICIPANTS</a>
    </div>
    <img src="{{ asset('storage/images/vote.png') }}" alt="vote for new wave" id="img-accueil">
    <div class="single-button">
        <a href="/tous-les-episodes" class="home-btn" id="episodes-btn">TOUS LES EPISODES</a>
        <a href="/contact" class="home-btn" id="contact-btn">CONTACT</a>
    </div>
</div>
</body>
@stop
<style>
.home-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 65%;
    height: auto;
    margin: 3em auto;
    padding: 1em;
}

.home-btn {
    padding: 15 0 15 0;
    font-size: 1.25em;
    font-weight: bolder;
    border-radius: 6px;
    background-color: var(--orange-2);
    color: var(--white);
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s;
}

.home-btn:hover {
    background-color: var(--orange-1);
    color: var(--white);
    text-decoration: none;
    transition: background-color 0.3s;
}

#img-accueil {
    width: 100%;
    height: auto;
    border-radius: 6px;
    object-fit: cover;
    
}

.button-container {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.button-container{
    margin-bottom: 10px;
}

#episodes-btn {
    margin: 10 0 5 0;
    width: 100%;
}

#contact-btn {
    margin: 5 0 0 0;
    width: 100%;
}

#concept-btn {
    margin: 0 10 0 0;
    width: 100%;
}

#participants-btn {
    margin: 0 0 0 10;
    width: 100%;
}

.single-button {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
}

.single-button a {
    width: 100%;
}


@media screen and (max-width: 37.5em) {

    .home-btn{
    font-size: 1em;
    }
}

@media screen and (max-width: 30em) {

    .home-btn{
    font-size: 0.8em;
    }
}

@media screen and (max-width: 23.5em) {

    .home-btn{
    font-size: 0.7em;
    }
}

</style>


