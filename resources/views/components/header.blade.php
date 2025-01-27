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

        <div class="cart-wrapper">
            <div class="cart-icon">
                <i class="fa-solid fa-cart-shopping"></i>
                @php
                    $cart = session()->get('cart', []);
                    $cartCount = array_sum(array_column($cart, 'quantity'));
                @endphp
                <span class="cart-count">{{ $cartCount }}</span>
            </div>
            <div class="cart-dropdown">
                <div class="cart-items">
                    @php
                        $cartItems = session()->get('cart', []);
                        $total = 0;
                    @endphp

                    @if(count($cartItems) > 0)
                        @foreach($cartItems as $id => $details)
                            @php
                                $product = \App\Models\Product::find($id);
                                if($product) {
                                    $itemTotal = $product->price * $details['quantity'];
                                    $total += $itemTotal;
                                }
                            @endphp
                            @if($product)
                            <div class="dropdown-item">
                                <span class="item-name">{{ $product->name }}</span>
                                <span class="item-details">
                                    {{ $details['quantity'] }} x {{ number_format($product->price, 2, ',', ' ') }} €
                                    = {{ number_format($itemTotal, 2, ',', ' ') }} €
                                </span>
                            </div>
                            @endif
                        @endforeach
                    @else
                        <div class="cart-empty">Votre panier est vide</div>
                    @endif
                </div>
                <div class="cart-footer">
                    <div class="cart-total">Total: {{ number_format($total ?? 0, 2, ',', ' ') }} €</div>
                    <a href="{{ route('cart') }}" class="cart-button">Voir mon panier</a>
                </div>
            </div>
        </div>

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
                <li class="mobile-cart">
                    <a class="lnk" href="{{ route('cart') }}">
                        <div class="cart-mobile-container">
                            <i class="fa-solid fa-cart-shopping"></i>
                            @php
                                $cart = session()->get('cart', []);
                                $cartCount = array_sum(array_column($cart, 'quantity'));
                            @endphp
                            <span class="cart-count">{{ $cartCount }}</span>
                            <span class="cart-text">Mon panier</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
</header>
