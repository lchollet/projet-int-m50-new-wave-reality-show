@extends('layouts.default')
@section('content')

    <img src="{{ asset('storage/images/avatar.png') }}" alt="profil" id="avatar">
    <h1>{{ Auth::user()->name }}</h1>

    <ul>
        <li>Compte</li>
        <li>Notifications</li>
        <li>Cadeaux</li>
    </ul>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" type="button" class="btn btn-warning btn-login">Disconnect</button>
    </form>

    <style>
        h1 {
            font-family: var(--h1-font-family);
            font-weight: var(--h1-font-weight);
            font-size: 45px;
            text-align: center;
            margin-bottom: 5%;
        }

        #avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
            margin-top: 5%;
        }

    </style>
@stop