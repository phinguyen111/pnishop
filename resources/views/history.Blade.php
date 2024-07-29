@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">Order Details</h1>
    <div class="card shadow-lg mb-5">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="mb-0">Order Summary</h3>
        </div>
        <div class="card-body p-4">
            <div class="mb-4">
                <h5 class="mb-3">Customer Information</h5>
                <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Address:</strong> {{ Auth::user()->address }}</p>
                <p><strong>Order Date:</strong> {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</p>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Product</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-end">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->orderItems as $item)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $item['product']->img) }}" alt="{{ $item->product->name }}" class="img-fluid rounded me-3" style="width: 60px; height: 60px;">
                                    <div>
                                        <strong>{{ $item->product->name }}</strong><br>
                                        <small class="text-muted">SKU: {{ $item->product->sku }}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center align-middle">{{ $item->quantity }}</td>
                            <td class="text-end align-middle">${{ number_format($item->price, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4 text-end">
                <h4>Total Price: <span class="text-primary">${{ number_format($order->total_price, 2) }}</span></h4>
            </div>
        </div>
    </div>
</div>
@endsection
