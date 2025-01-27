<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choupette création</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/sigle-choupette.png') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/caroussel.js', 'resources/js/burger.js'])
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
