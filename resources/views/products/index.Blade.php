@extends('layout')
@section('title','PNshop')
@section('title2','welcome to Product shop')
@section('content')

<main>

  <div class="custom-color">
    <div class="container">
      <div class="row mb-2 pt-4 pb-4 mt-4">
        <div class="col-auto fs-4 fw-semibold">Rings</div>
        <div class="col">
          <div class="row mb-2 custom-product">
            <div class="col-auto border-end border-3 h-100 "><a href=""
                class="text-decoration-none text-dark fs-6">Home</a></div>
            <div class="col-auto"><a href="" class="text-decoration-none text-dark fs-6">Rings</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row mb-2">
      <div class="col-2">
        <form action="{{ route('products.search') }}" method="GET" class="mb-4">
          <div class="input-group border-bottom border-dark">
            <input type="text" name="query" placeholder="Tìm kiếm" class="form-control border-0 rounded-0 ">
            <div class="input-group-append">
              <button type="submit" class="btn"><i
                  class="fa-solid fa-magnifying-glass text-primary-custom"></i></button>
            </div>
          </div>
        </form>
        <div class="custom-color p-2 mb-2">
          <a href="{{ route('products.index') }}" class="text-decoration-none text-dark fw-semibold">Home</a>
        </div>
        @foreach($categories as $category)
        <div class="mb-2">
          <a href="{{ route('products.index', ['category_id' => $category->id]) }}"
            class="text-decoration-none text-dark fw-normal p-2">{{ $category->name }}</a>
        </div>
        @endforeach

        <div class="custom-color p-2 mb-2 mt-4">
          <a href="#" class=" text-decoration-none text-dark fw-semibold">Filter By</a>
        </div>
        <p class=" ps-2 mt-3">Categories</p>
        <div class="mb-2 ps-2 d-flex align-items-center">
          <input type="checkbox" class="form-check-input me-2" name="" id="">
          <p class="m-0 mt-1">bracelets</p>
        </div>
        <div class="mb-2 ps-2 d-flex align-items-center">
          <input type="checkbox" class="form-check-input me-2" name="" id="">
          <p class="m-0 mt-1">bracelets</p>
        </div>
        <div class="mb-2 ps-2 d-flex align-items-center">
          <input type="checkbox" class="form-check-input me-2" name="" id="">
          <p class="m-0 mt-1">bracelets</p>
        </div>
        <div class="sort-container">
          <div class="sort-heading">Sort by Price</div>
          <div class="sort-slider" id="price-slider"></div>
          <div class="price-range">Price Range: <span id="price-range"></span></div>
        </div>
        <p class=" ps-2 mt-3">size</p>
        <div class="mb-2 ps-2 d-flex align-items-center">
          <input type="checkbox" class="form-check-input me-2" name="" id="">
          <p class="m-0 mt-1">S</p>
        </div>
        <div class="mb-2 ps-2 d-flex align-items-center">
          <input type="checkbox" class="form-check-input me-2" name="" id="">
          <p class="m-0 mt-1">M</p>
        </div>
        <div class="mb-2 ps-2 d-flex align-items-center">
          <input type="checkbox" class="form-check-input me-2" name="" id="">
          <p class="m-0 mt-1">L</p>
        </div>
        <div class="mb-2 ps-2 d-flex align-items-center">
          <input type="checkbox" class="form-check-input me-2" name="" id="">
          <p class="m-0 mt-1">XL</p>
        </div>
        <img src="img/left-banner-1.jpg" class="w-100" alt="">

      </div>
      <div class="col-10">
        <img src="img/3-category_default.jpg" class="w-100" alt="">
        <div class="mt-4 mb-5">

          <p class="fs-6 fw-lighter">Rings, symbols of eternity and unity, hold significance far beyond their physical
            form. They transcend time, serving as reminders of vows, bonds, and everlasting love.</p>
        </div>
        <div class="row mb-2">
          <div class="col">
            <p><i class="fa-solid fa-list-ul"></i> There are 15 products.</p>
          </div>
          <div class="col sortby w-25">
            <div class="card-body d-flex gap-2 align-items-center">
              <h5 class="card-title mb-0 fs-6 fw-normal">Sort By</h5>
              <div class="form-group mb-0 ml-3">
                <select class="" id="sortBySelect">
                  <option value="default">Default</option>
                  <option value="priceLowToHigh">Price: Low to High</option>
                  <option value="priceHighToLow">Price: High to Low</option>
                  <option value="nameAscending">Name: A to Z</option>
                  <option value="nameDescending">Name: Z to A</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-2">
          @foreach($products as $product)
          <div class="col-3 text-center product-item">
            <div class="product-image-container">
              <img src="{{ asset('storage/' . $product->img) }}" class="w-100" alt="">
              <div class="product-overlay">
                <div class="product-action-left">
                  <i class="fa-regular fa-heart"></i>
                </div>

                <form action="{{ route('cart.add') }}" method="POST">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <div class="product-action-right">
                    
                    @if ($product->quantity == 0)
                            <button class="btn btn-secondary" disabled>Hết hàng</button>
                        @else
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <div class="add-btn"> <a href="#"><button type="submit"
                          class="rounded-0 border-0 bg-none text-light fw-semibold"> Add
                          to Cart</button></a>
                    </div>
                            </form>
                        @endif
                  </div>
                </form>
              </div>
            </div>
            <a href="{{ route('products.show', $product->id) }}" class="text-dark text-decoration-none">
              <p class="m-0 fw-semibold">{{ $product->name }}</p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">${{ $product->price }}</p>
          </div>

          @endforeach
        </div>
        <div class="d-flex justify-content-center ">
          {{ $products->links('vendor.pagination.custom') }}
        </div>

      </div>
    </div>
  </div>
</main>
@endsection