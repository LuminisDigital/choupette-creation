
@extends('layout.app')

@section('title', 'Réalisations')

@section('content')
<section class="realisations">
    <h1 class="realisations-ttl">Nos Réalisations</h1>


    <div class="carousel-container">
        <h2 class="carousel-ttl">travaux de broderie personnalisée</h2>
        <div class="carousel">
            <button class="carousel-btn prev">&lt;</button>
            <div class="carousel-content">
                <img src="" alt="Broderie 1">
                <img src="" alt="Broderie 2">
                <img src="" alt="Broderie 3">
                <img src="" alt="Broderie 4">
                <img src="" alt="Broderie 5">
            </div>
            <button class="carousel-btn next">&gt;</button>
        </div>
        <div class="carousel-pagination">
            <span class="current-page"></span> / <span class="total-pages"></span>
        </div>
    </div>


    <img class="design6" src="../img/design6.png" alt="">


    <div class="carousel-container">
        <h2 class="carousel-ttl">Customisation de vêtements</h2>
        <div class="carousel">
            <button class="carousel-btn prev">&lt;</button>
            <div class="carousel-content">
                <img src="" alt="Custom 1">
                <img src="" alt="Custom 2">
                <img src="" alt="Custom 3">
                <img src="" alt="Custom 4">
                <img src="" alt="Custom 5">
            </div>
            <button class="carousel-btn next">&gt;</button>
        </div>
        <div class="carousel-pagination">
            <span class="current-page"></span> / <span class="total-pages"></span>
        </div>
    </div>


    <img class="design6" src="../img/design6.png" alt="">


    <div class="carousel-container">
        <h2 class="carousel-ttl">Lingettes, paniers et distributeurs</h2>
        <div class="carousel">
            <button class="carousel-btn prev">&lt;</button>
            <div class="carousel-content">
                <img src="" alt="real 1">
                <img src="" alt="real 2">
                <img src="" alt="real 3">
                <img src="" alt="real 4">
                <img src="" alt="real 5">
            </div>
            <button class="carousel-btn next">&gt;</button>
        </div>
        <div class="carousel-pagination">
            <span class="current-page"></span> / <span class="total-pages"></span>
        </div>
    </div>


<img class="design6" src="../img/design6.png" alt="">

    <div class="carousel-container">
        <h2 class="carousel-ttl">Création de vêtements pour un ours en peluiche avec broderies</h2>
        <div class="carousel">
            <button class="carousel-btn prev">&lt;</button>
            <div class="carousel-content">
                <img src="" alt="bear 1">
                <img src="" alt="bear 2">
                <img src="" alt="bear 3">
                <img src="" alt="bear 4">
                <img src="" alt="bear 5">
            </div>
            <button class="carousel-btn next">&gt;</button>
        </div>
        <div class="carousel-pagination">
            <span class="current-page"></span> / <span class="total-pages"></span>
        </div>
    </div>


</section>
@endsection
