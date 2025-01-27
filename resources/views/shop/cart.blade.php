@extends('layout.app')

@section('title', 'Mon Panier')

@section('content')
<div class="cart-page">
    <h1 class="cart-title">Mon Panier</h1>

    <div class="cart-container">
        @if(isset($items) && count($items) > 0)
            <div class="cart-items-list">
                @foreach($items as $item)
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="{{ asset($item->image_path) }}" alt="{{ $item->name }}">
                        </div>
                        <div class="item-details">
                            <h3 class="item-name">{{ $item->name }}</h3>
                            <p class="item-price">{{ number_format($item->price, 2, ',', ' ') }} €</p>
                        </div>
                        <div class="item-quantity">
                            <button class="quantity-btn minus" data-product-id="{{ $item->id }}">-</button>
                            <input type="number" value="{{ $item->quantity }}" data-product-id="{{ $item->id }}" min="1" max="{{ $item->stock }}" readonly>
                            <button class="quantity-btn plus" data-product-id="{{ $item->id }}">+</button>
                        </div>
                        <div class="item-total">
                            {{ number_format($item->price * $item->quantity, 2, ',', ' ') }} €
                        </div>
                        <button class="remove-item" data-product-id="{{ $item->id }}">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                @endforeach
            </div>

            <div class="cart-summary">
                <div class="summary-row">
                    <span>Sous-total</span>
                    <span>{{ number_format($subtotal, 2, ',', ' ') }} €</span>
                </div>
                <div class="summary-row">
                    <span>Livraison</span>
                    <span>Gratuite</span>
                </div>
                <div class="summary-row total">
                    <span>Total</span>
                    <span>{{ number_format($total, 2, ',', ' ') }} €</span>
                </div>

                <div class="cart-actions">
                    <button class="empty-cart">Vider le panier</button>
                    <a href="{{ route('shop.index') }}" class="continue-shopping">Continuer mes achats</a>
                    <button class="checkout">Commander</button>
                </div>
            </div>
        @else
            <div class="empty-cart-message">
                <i class="fas fa-shopping-cart"></i>
                <p class="empty-cart-txt">Votre panier est vide</p>
                <a href="{{ route('shop.index') }}" class="continue-shopping">Découvrir nos produits</a>
            </div>
        @endif
    </div>
</div>
@endsection
