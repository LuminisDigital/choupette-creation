<header>
    <div class="header-container">
        <img class="header-logo" src="../img/logo-choupette.png" alt="logo">

        <!-- Menu Desktop -->
        <nav class="nav-lg">
            <ul class="nav-lg-itm">
                <li><a class="lnk" href="{{ route('home') }}">Accueil</a></li>
                <li><a class="lnk" href="{{ route('about') }}">A propos</a></li>
                <li><a class="lnk" href="{{ route('realisations') }}">Réalisations</a></li>
                <li><a class="lnk" href="{{ route('price') }}">Tarifs</a></li>
                <li><a class="lnk" href="{{ route('shop.index') }}">Boutique</a></li>
                <li><a class="lnk" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>

        <!-- Menu Mobile -->
        <button class="burger-menu" aria-label="Menu">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </button>
        <nav class="nav-mobile">
            <ul>
                <li><a class="lnk" href="{{ route('home') }}">Accueil</a></li>
                <li><a class="lnk" href="{{ route('about') }}">A propos</a></li>
                <li><a class="lnk" href="{{ route('realisations') }}">Réalisations</a></li>
                <li><a class="lnk" href="{{ route('price') }}">Tarifs</a></li>
                <li><a class="lnk" href="{{ route('shop.index') }}">Boutique</a></li>
                <li><a class="lnk" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
