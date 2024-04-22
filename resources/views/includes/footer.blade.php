<footer>

<div class="footer">
    <div class="contain">
      <div class="col social">
        <h1>Suis-nous !</h1>
        <ul class="social-list">
          <li><a href="https://www.tiktok.com/"><img src="{{ asset('storage/images/tiktok.png') }}" alt="Logo de tiktok" /></a></li>
          <li><a href="https://www.instagram.com/"><img src="{{ asset('storage/images/insta.png') }}" alt="Logo d'instagram" /></a></li>
          <li><a href="https://www.twitch.tv/"><img src="{{ asset('storage/images/twitch.png') }}" alt="Logo de twitch" /></a></li>
          <li><a href="https://www.youtube.com/"><img src="{{ asset('storage/images/youtube.png') }}" alt="Logo de Youtbe" /></a></li>
        </ul>
      </div>
      <div class="col">
        <h1>Menu</h1>
        <ul>
          <li><a href="{{ route('maison')}}">Accueil</a></li>
          <li><a href="{{ route('concept') }}">Concept</a></li>
          <li><a href="{{ route('tous_les_episodes') }}">Les épisodes</a></li>
          <li><a href="{{ route('contact') }}">Contacts</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="copyright">
      <p>© Wave 2024</p>
    </div>
  </div>
</div>
</footer>

<style>

.footer {
  width: 100%;
  height: 16em;
  background-color: var(--black);
  position: relative;
  bottom: 0;
  left: 0;
}

.footer .contain {
  width: 90%;
  margin: 0 auto;
  display: flex;
  justify-content: center;
}

.footer .col {
  width: 190px;
  height: auto;
  float: inline-start;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding: 10px 20px 60px 20px;
  margin: 0 10% 0 0; 
}

.footer .col h1 {
  margin: 0;
  padding: 0;
  font-family: inherit;
  font-size: 12px;
  line-height: 17px;
  padding: 20px 0px 5px 0px;
  color: var(--light-grey);
  font-weight: normal;
  letter-spacing: 0.250em;
}

.footer .col ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

a {
  color: var(--white);
}

a:hover {
  color: var(--orange-1);
  text-decoration: none;
}

.footer .col ul li {
  color: var(--white);
  font-size: 14px;
  font-family: inherit;
  font-weight: bold;
  padding: 5px 0px 5px 0px;
  cursor: pointer;
  transition: .2s;
  -webkit-transition: .2s;
  -moz-transition: .2s;
}

.social ul li {
  display: inline-block;
  padding-right: 5px !important;
}

.footer .col ul li:hover {
  color: var(--orange-1);
  transition: .1s;
  -webkit-transition: .1s;
  -moz-transition: .1s;
}

.footer img {
  max-width: 1.8em;
  height: auto;
}

.footer .copyright {
  position: absolute; /* Position absolue par rapport au footer */
  bottom: 10px; /* Distance du bas du footer */
  left: 50%; /* Centrer horizontalement */
  transform: translateX(-50%); /* Décaler de moitié de sa propre largeur vers la gauche */
  color: var(--light-grey);
  font-size: 12px;
  margin-top: 50px;
}

.clearfix {
  clear: both;
}

@media only screen and (min-width: 1280px) {
  .contain {
    width: 1200px;
    margin: 0 auto;
  }
}
@media only screen and (max-width: 1139px) {
  .contain .social {
    width: 1000px;
    display: block;
  }
  .social h1 {
    margin: 0px;
  }
}
@media only screen and (max-width: 950px) {
  .footer .col {
    width: 33%;
  }
  .footer .col h1 {
    font-size: 14px;
  }
  .footer .col ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 500px) {
    .footer .col {
      width: 50%;
    }
    .footer .col h1 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
}
@media only screen and (max-width: 340px) {
  .footer .col {
    width: 100%;
  }
}


@media only screen and (max-width: 500px) {
  .footer .col {
    width: 50%;
  }
  .footer .col h1 {
    font-size: 14px;
  }
  .footer .col ul li {
    font-size: 13px;
  }

  .social ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .social ul li {
    width: 50%; /* Chaque icône prend la moitié de la largeur */
    margin-bottom: 10px; /* Marge entre les lignes */
  }
}



  </style>
