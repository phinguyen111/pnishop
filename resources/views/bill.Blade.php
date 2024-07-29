@extends('layout')
@section('title','Bill')
@section('content')

<main class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Bill Details</h4>
                    </div>
                    <div class="card-body">
    <div class="product-list mb-4">
        @foreach ($cartItems as $item)
        <div class="product-item d-flex justify-content-between align-items-center py-2 border-bottom">
            <div class="product-details d-flex align-items-center">
                <img src="{{ asset('storage/' . $item['product']->img) }}" alt="{{ $item['product']->name }}" class="img-fluid me-3 w-25" style="width: 50px;">
                <div>
                    <h6 class="mb-0">{{ $item['product']->name }}</h6>
                    <small>Quantity: {{ $item['quantity'] }}</small>
                </div>
            </div>
            <div class="product-price">
                <span class="badge bg-success text-white">${{ number_format($item['product']->price * $item['quantity'], 2) }}</span>
            </div>
        </div>
        @endforeach
    </div>
    <div class="total-section mt-4">
        <div class="d-flex justify-content-between mb-1">
            <span><strong>Total Items:</strong></span>
            <span>{{ $totals['totalItems'] }}</span>
        </div>
        <div class="d-flex justify-content-between mb-1">
            <span><strong>Subtotal:</strong></span>
            <span>${{ number_format($totals['subtotal'], 2) }}</span>
        </div>
        <div class="d-flex justify-content-between mb-1">
            <span><strong>Tax (10%):</strong></span>
            <span>${{ number_format($totals['tax'], 2) }}</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <h5><strong>Total:</strong></h5>
            <h5>${{ number_format($totals['total'], 2) }}</h5>
        </div>
    </div>
</div>

                </div>
            </div>
            <div class="col-lg-4">
            @if (Auth::check())
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-secondary text-white">
            <h5 class="mb-0">Your Information</h5>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Address:</strong> {{ Auth::user()->address }}</p>
            <a href="/bill/success"><button class="btn btn-primary btn-block mt-3">Proceed to Checkout</button></a>
        </div>
    </div>
@else
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-secondary text-white">
            <h5 class="mb-0">Proceed to Checkout</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('bill.submit') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <input type="hidden" name="total" value="{{ $totals['total'] }}">
                <button type="submit" class="btn btn-primary">Submit Order</button>
            </form>
            <div class="mt-3 text-center">
                <p>or</p>
                <a href="{{ route('login', ['redirect' => 'bill']) }}" class="btn btn-secondary">Log in to Checkout</a>
            </div>
        </div>
    </div>
@endif

            </div>
        </div>
    </div>
</main>

@endsection
