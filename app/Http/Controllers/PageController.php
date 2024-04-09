<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PageController extends Controller
{
    public function maison()
    {
        return view('maison');
    }

    public function concept()
    {
        return view('concept');
    }

    public function dernierEpisode()
    {
        return view('dernier_episode');
    }

    public function tousLesEpisodes()
    {
        return view('tous_les_episodes');
    }

    public function contact()
    {
        return view('contact');
    }

    public function connexion()
    {
        return view('connexion');
    }

    public function monCompte()
    {
        return view('mon_compte');
    }

    public function infoGenerale()
    {
        return view('info_generale');
    }

    public function parametre()
    {
        return view('parametre');
    }
}
