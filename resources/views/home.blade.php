@extends('layout.app')

@section('title', 'Accueil')

@section('content')


<section class="intro">
    <img class="design2" src="../img/design2.png" alt="">
    <img class="intro-logo" src="../img/choupette.png" alt="">
    <h1 class="intro-ttl">Bienvenue dans mon atelier de couture</h1>

    <div class="intro-img-container">
<img class="intro-img" src="../img/img1.jpg" alt="">
<img class="intro-img" src="../img/img2.jpg" alt="">
    </div>

    <img class="design6" src="../img/design6.png" alt="">

<h2 class="intro-ttl">Pourquoi faire appel à Choupette Creations ?</h2>
<div class="intro-txt-container">
<p class="intro-txt">Adoptez une <span class="intro-span">démarche écologique </span>en réutilisant vos vêtements customisés ou en adoptant les lingettes lavables.</p>
<p class="intro-txt">Prenez soin de l'artisanat <span class="intro-span">made in France !</span>  Vous aurez le plaisir d'un contact privilégié avec la créatrice.</p>
<p class="intro-txt">Faites-moi confiance pour utiliser les <span class="intro-span">meilleurs matériaux</span>  pour vous comme les tissus certifiés oeko-tex.</p>
</div>


<img class="design6" src="../img/design6.png" alt="">

<div class="map-container">
    <h2 class="intro-ttl">Ou nous trouver</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2606.7788722042937!2d-0.33260582322820986!3d49.204754276269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c0cb8e3e1751b9f%3A0x84665c5d6d2b50b0!2sChoupette%20Cr%C3%A9ations!5e0!3m2!1sfr!2sfr!4v1737569930905!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


</section>

@endsection
