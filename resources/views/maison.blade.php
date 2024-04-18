@extends('layouts.default')
@section('content')
<head>
    <title>Accueil</title>
</head>
<body>
<div class="button-container">
    <div class="button-group">
        <a href="/concept" class="btn" id="btn-concept">CONCEPTS</a>
        <a href="/participants" class="btn" id="btn-participants">PARTICIPANTS</a>
    </div>
    <img src="{{ asset('storage/images/vote.png') }}" alt="vote for new wave" id="img-accueil">
    <div>
        <a href="/tous-les-episodes" class="btn" id="btn-episodes">TOUS LES EPISODES</a><br>
    </div>
    <div><a href="/contact" class="btn" id="btn-contact">CONTACT</a></div>
</div>
</body>

@stop

<style>

.button-container  img{
    height: auto;
    width: 90vw;
}

.button-container  a{
    margin: 10px;
    padding: 10px;
    width: 44vw;
    font-size: 20px;
    font-weight: bolder;
    border-radius: 6px;
    background-color: var(--orange-2);
    color: var(--white);
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button-container {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    margin: 20px 0 40px 0;
}

.button-group {
    display: flex;
    justify-content: center;
}

#btn-episodes {
    width: 90vw;
}

#btn-contact {
    width: 90vw;
}


@media screen and (max-width: 550px) {
    .button-container a{
        font-size: 16px;
    }
}

@media screen and (max-width: 320px) {
    .button-container a{
        font-size: 14px;
    }
}

@media screen and (max-width: 270px) {
    .button-container a{
        font-size: 12px;
    }
}

</style>
