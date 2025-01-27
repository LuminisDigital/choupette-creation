@extends('layout.app')

@section('title', $product->name)

@section('content')
<section class="product-details">
    <div class="product-details-container">
        <div class="product-image-container">
            <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="product-main-image">
        </div>

        <div class="product-info">
            <h1 class="product-title">{{ $product->name }}</h1>
            <p class="product-price">{{ number_format($product->price, 2, ',', ' ') }} €</p>
            <p class="stock-status {{ $product->stock === 0 ? 'out-of-stock' : 'in-stock' }}">
                {{ $product->stock_status }}
            </p>

            <div class="product-description">
                {!! nl2br(e($product->description)) !!}
            </div>

            @if($product->isInStock())
                <div class="product-actions">
                    <button class="btn-cart">Ajouter au panier</button>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
