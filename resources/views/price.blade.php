@extends('layout.app')

@section('title', 'Tarifs')

@section('content')
<section class="tarifs">
    <img class="intro-logo" src="../img/choupette.png" alt="">
    <h1 class="tarifs-ttl">Nos Tarifs</h1>

    <div class="tarifs-container">
        <p class="tarifs-intro">Découvrez nos prestations et leurs tarifs associés. N'hésitez pas à nous contacter pour toute demande spécifique.</p>

        <div class="tarifs-btn-container">
            <a href="{{ route('contact') }}" class="tarifs-btn">Me contacter</a>
        </div>

        <div class="tarifs-content">
            <img src="../img/tarifs choupette.png" alt="Grille tarifaire Choupette Créations" class="tarifs-img">
        </div>

        <div class="tarifs-btn-container">
            <a href="{{ route('contact') }}" class="tarifs-btn">Me contacter</a>
        </div>

        <p class="tarifs-note">Pour toute demande particulière ou devis personnalisé, n'hésitez pas à nous contacter directement.</p>
    </div>
</section>
@endsection
