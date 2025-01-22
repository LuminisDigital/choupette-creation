@extends('layout.app')

@section('title', 'Contact')

@section('content')
<section class="contact">
    <h1 class="contact-ttl">Contactez-moi</h1>

    <form class="contact-form" action="/contact" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="tel" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="subject">Sujet</label>
            <input type="text" id="subject" name="subject" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <div class="submit-btn-container">
            <button type="submit" class="submit-btn">Envoyer</button>
        </div>
    </form>
</section>
@endsection
