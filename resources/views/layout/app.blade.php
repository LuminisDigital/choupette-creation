<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Choupette création</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/sigle-choupette.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/caroussel.js', 'resources/js/burger.js', 'resources/js/cart.js'])
</head>

<body>

<header>
    @include('components.header')
</header>


<main>

    @yield('content')

</main>

<footer>
  @include('components.footer')
</footer>

</body>
</html>
