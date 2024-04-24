@extends('layouts.default')
@section('content')

    <img src="{{ asset('storage/images/avatar.png') }}" alt="profil" id="avatar2">
    <h1>{{ Auth::user()->name }}</h1>

    <div class="dash">
        <ul class="dashboard-menu">
            <a href="/profile">
                <li>Compte</li>
            </a>
            <a href="/">
                <li>Notifications</li>
            </a>
            <a href="/">
                <li>Cadeaux</li>
            </a>
        </ul>
    </div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" type="button" class="btn btn-warning btn-login" id="disconnect" >Disconnect</button>
    </form>


    <style>
        h1 {
            font-family: var(--h1-font-family);
            font-weight: var(--h1-font-weight);
            font-size: 45px;
            text-align: center;
            margin-bottom: 5%;
        }

        .dashboard-menu {
            text-align: center;
            margin-right: 6%;
            width: 50%;
            list-style-type: none;
        }

        .dashboard-menu li {
            padding: 10px;
        }

        .dashboard-menu a {
            color: black;
        }

        .dash {
            display: flex;
            justify-content: space-around;
            margin-top: 5%;
        }

        #disconnect {
            margin-top: 5%;
            display: block;
            margin: auto;
            margin-bottom: 10%;
        }

        #avatar2 {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
            margin-top: 5%;
        }
    </style>
@stop
