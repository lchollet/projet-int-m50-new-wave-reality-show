@extends('layouts.default')
@section('content')
<div class="content">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<h1 class="title">Participe aux épreuves !</h1>
<h3 class="description"> Ci-dessous la liste des différentes épreuves auxquelles tu peux toi aussi participer et avoir l’occasion de rencontrer nos aventuriers !</h3>

    <div class="contestList">
        <a href="/robin-des-bois">
        <div class="contestCard">
            <div class="daysLabel">
                <p class="daysLabelText">38 PLACES RESTANTES !</p>
            </div>

            <div class="contestTitleDiv">
                <p class="contestTitle">QUI SERA LE ROBIN DES BOIS ?</p>
            </div>
        </div>
        </a>

        <div class="contestCard comingSoon">
        <div class="daysLabel">
                <p class="daysLabelText">À VENIR</p>
            </div>
        </div>

    </div>
</div>

<script>
</script>


<style>
    .content{
        margin: 0px 30px 30px 30px;
    }

    .title{
        font-family: var(--h1-font-family);
        font-weight: var(--h1-font-weight);
        font-size: var(--h1-font-size);
    }

    .description{
        font-family: var(--h3-font-family);
        font-weight: var(--h3-font-weight);
        font-size: var(--h3-font-size);
    }

    .contestCard{
        position: relative;
        /* background-color: blue;  */
        background-image: url('{{ asset('storage/images/robin-des-bois.png') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

        height: 260px;
        border-radius: 6px; 
        padding: 13px;
        margin-bottom: 30px;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .comingSoon{
        background-image: url('{{ asset('storage/images/blurry.png') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

        height: 260px;
        border-radius: 6px; 
        padding: 13px;
    }

    .daysLabel{
        position: absolute; /* Position absolue pour positionner l'étiquette par rapport à son parent .contestCard */
        top: 13px; /* Distance du haut */
        left: 13px; /* Distance de la gauche */

        text-align: center;
        background-color: var(--orange-1);
        padding: 15px 20px 7px 20px; 
        border-radius: 30px;
    }

    .daysLabelText{
        color: var(--white);
        font-family: var(--h3-font-family);
        font-weight: 1000;
    }

    .contestTitleDiv{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .contestTitle{
        color: var(--white);
        font-family: var(--h1-font-family);
        font-size: var(--h1-font-size);
        font-weight: 1000;
    }
</style>
<!-- Participants Vaud -->
@stop
