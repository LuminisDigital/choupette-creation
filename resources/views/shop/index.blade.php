@extends('layout.app')

@section('title', 'Boutique')

@section('content')
<section class="shop">
    <h1 class="shop-title">Notre Boutique</h1>
    <div class="products-grid">
        @foreach($products as $product)
            <div class="product-card">
                <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="product-image">
                <div class="product-content">
                    <h2 class="product-title">{{ $product->name }}</h2>
                    <p class="product-description">{{ $product->short_description }}</p>
                    <p class="product-price">{{ number_format($product->price, 2, ',', ' ') }} €</p>
                    <p class="stock-status {{ $product->stock === 0 ? 'out-of-stock' : 'in-stock' }}">
                        {{ $product->stock_status }}
                    </p>
                    <div class="product-buttons">
                        <a href="{{ route('shop.show', $product->slug) }}" class="btn-details">En savoir plus</a>
                        @if($product->isInStock())
                            <button class="btn-cart">Ajouter au panier</button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
