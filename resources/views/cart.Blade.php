@extends('layout')
@section('title','PNshop')
@section('title2','Welcome to PN SHOP')
@section('content')

<main>
    <div class="custom-color">
        <div class="container">
            <div class="row mb-2 pt-4 pb-4 mt-4">
                <div class="col-auto fs-4 fw-semibold">Shopping Cart</div>
                <div class="col">
                    <div class="row mb-2 custom-product">
                        <div class="col-auto h-100">
                            <a href="/" class="text-decoration-none text-dark fs-6">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mb5">
            <div class="col-md-8">
                @if(count($cartItems) > 0)
                @foreach ($cartItems as $item)
                <div class="card mb-4 border-0 shadow-lg rounded-lg">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $item['product']->img) }}" class="img-fluid rounded-start"
                                alt="Product Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['product']->name }}</h5>
                                <div class="review-rating text-warning mb-2">★★★★☆</div>
                                <p class="card-text"><small class="text-muted">Price: ${{ $item['product']->price
                                        }}</small></p>
                                <p class="card-text"><small class="text-muted">Quantity: {{ $item['quantity'] }}</small>
                                </p>
                                <div class="quantity-container">
                                    <button class="btn btn-outline-secondary" type="button" id="decreaseQuantity"><i
                                            class="fas fa-minus"></i></button>
                                    <input type="number" id="quantity" name="quantity" class="form-control"
                                        value="{{ $item['quantity'] }}" min="1">
                                    <button class="btn btn-outline-secondary" type="button" id="increaseQuantity"><i
                                            class="fas fa-plus"></i></button>
                                </div>
                                <a href="{{ route('cart.destroy', $item['product']) }}"
                                    class="btn btn-outline-danger btn-sm mt-3">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="alert alert-info" role="alert">
                    Chưa có sản phẩm nào trong giỏ hàng cả.
                </div>
                @endif
            </div>
            <div class="col-md-4">
                @if(count($cartItems) > 0)
                <div class="card border-0 shadow-lg rounded-lg">
                    <div class="card-body">
                        <h5 class="card-title">Summary</h5>
                        <div class="list-group mb-3">
                            @foreach ($cartItems as $item)
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $item['product']->img) }}"
                                        alt="{{ $item['product']->name }}" class="img-thumbnail me-3"
                                        style="width: 50px; height: 50px;">
                                    <div>
                                        <h6 class="mb-0">{{ $item['product']->name }}</h6>
                                        <small class="text-muted">${{ number_format($item['product']->price, 2) }} x {{
                                            $item['quantity'] }}</small>
                                    </div>
                                </div>
                                <span class="badge bg-primary rounded-pill">{{ $item['quantity'] }}</span>
                            </div>
                            @endforeach
                        </div>
                        <div class="total-section mt-3">
                            <p class="text-end mb-1"><strong>Total Items:</strong> {{ $totals['totalItems'] }}</p>
                            <p class="text-end mb-1"><strong>Subtotal:</strong> ${{ number_format($totals['subtotal'],
                                2) }}</p>
                            <p class="text-end mb-1"><strong>Tax (10%):</strong> ${{ number_format($totals['tax'], 2) }}
                            </p>
                            <p class="text-end mb-1"><strong>Shipping:</strong> Free</p>
                            <hr>
                            <h5 class="text-end mb-3"><strong>Total:</strong> ${{ number_format($totals['total'], 2) }}
                            </h5>
                            <a href="/bill" class="btn btn-primary btn-block">Proceed to Checkout</a>
                        </div>

                    </div>
                </div>
                @else
                <div class="alert alert-info" role="alert">
                    Chưa có sản phẩm nào trong giỏ hàng cả.
                </div>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection