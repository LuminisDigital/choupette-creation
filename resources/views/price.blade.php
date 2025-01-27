@extends('layout.app')

@section('title', 'Tarifs')

@section('content')
    <section class="price">
        <img class="design2" src="../img/design2.png" alt="">
        <img class="intro-logo" src="../img/choupette.png" alt="">
        <h1 class="price-ttl">Nos Tarifs</h1>

        <div class="price-container">
            <p class="price-intro">Découvrez nos prestations et leurs price associés. N'hésitez pas à nous contacter pour
                toute demande spécifique.</p>

            <div class="price-btn-container">
                <a href="{{ route('contact') }}" class="price-btn">Me contacter</a>
            </div>
            <div class="price-course">
                <p>Cours de couture : <span class="price-span">15€/Heure</span> </p>
                <p>(Matériel, tissus <span class="price-span">compris</span> , exercices, prise en main et compréhension de la machine, <span class="price-span">projet à la clef</span> .)
                </p>
            </div>


            <div class="price-content">
                <img src="../img/price.png" alt="Grille tarifaire Choupette Créations" class="price-img">
            </div>

            <div class="price-btn-container">
                <a href="{{ route('contact') }}" class="price-btn">Me contacter</a>
            </div>

            <p class="price-note">Pour toute demande particulière ou devis personnalisé, n'hésitez pas à nous contacter
                directement.</p>
        </div>
    </section>
@endsection
