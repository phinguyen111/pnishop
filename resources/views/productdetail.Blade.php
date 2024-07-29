@extends('layout')
@section('title','PNshop')
@section('title2','welcome to san pham 1')
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

    <main class="container mt-3">
       
        <div class="row">
            <div class="col-md-4">
                <div class="product-main-img-container">
                    <img src="{{$product -> img}}" class="img-fluid product-main-img" alt="Product Image">
                </div>
            </div>
            <div class="col-md-8">
                <div class="product-card">
                    <h2>Diamond Drop Dangling</h2>
                    <p class=" fs-5 fw-bolder text-primary-custom">$128</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-muted">(4.5/5)</span>
                    </div>
                    <div class="my-2">
                        <span class="badge bg-info text-dark">Free Shipping</span>
                    </div>
                    <div class="mb-2">
                        <label for="quantity" class="form-label">Quantity</label>
                        <div class="quantity-container">
                            <button class="btn btn-outline-secondary" type="button" id="decreaseQuantity"><i class="fas fa-minus"></i></button>
                            <input type="number" id="quantity" class="form-control" value="1" min="1">
                            <button class="btn btn-outline-secondary" type="button" id="increaseQuantity"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <a href="/cart"><button type="button" class="btn btn-primary btn-block"><i class="fas fa-cart-plus"></i> Add to Cart</button></a>
                    <div class="product-description mt-3">
                        <h3>Product Description</h3>
                        <p>These shoes are designed to provide comfort and durability. With advanced cushioning and lightweight materials, they are perfect for daily wear and athletic activities.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-reviews mt-4">
            <h3>Customer Reviews</h3>
            <div class="review-card">
                <div class="review-content">
                    <div class="review-author">John Doe <span class="review-date">- Jan 12, 2024</span></div>
                    <p>Great product! Really comfortable and looks amazing.</p>
                </div>
            </div>
            <div class="review-card">
                <div class="review-content">
                    <div class="review-author">Jane Smith <span class="review-date">- Feb 8, 2024</span></div>
                   
                    <p>Very good quality, but the size runs a bit small.</p>
                </div>
            </div>
        </div>

        <div class="related-products mt-4 mb-5">
            <h3>Related Products</h3>
            <div class="row mb-2">
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-6.jpg')}}" class="w-100" alt="">
              <div class="product-overlay">
                <div class="product-action-left">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <div class="product-action-right1">
                  
                    <div class="add-btn"><a href="/cart" class="text-dark text-decoration-none"> Add to Cart</a></div>
                  
                </div>
              </div>
            </div>
            <a href="/Product/productdetail" class="text-dark text-decoration-none"><p class="m-0 fw-semibold">Diamond Drop Dangling</p></a>
              <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-7.jpg')}}" class="w-100" alt="">
              <div class="product-overlay">
                <div class="product-action-left">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <div class="product-action-right1">
                  <div class="add-btn">Add to Cart</div>
                </div>
              </div>
            </div>
            <a href="/Product/productdetail" class="text-dark text-decoration-none"><p class="m-0 fw-semibold">Beautiful Crystals Jewelry</p></a>
              <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-8.jpg')}}" class="w-100" alt="">
              <div class="product-overlay">
                <div class="product-action-left">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <div class="product-action-right1">
                  <div class="add-btn">Add to Cart</div>
                </div>
              </div>
            </div>
            <a href="/Product/productdetail" class="text-dark text-decoration-none"><p class="m-0 fw-semibold">Bridal Ring Silver</p></a>
              <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-9.jpg')}}" class="w-100" alt="">
              <div class="product-overlay">
                <div class="product-action-left">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <div class="product-action-right1">
                  <div class="add-btn">Add to Cart</div>
                </div>
              </div>
            </div>
            <a href="/Product/productdetail" class="text-dark text-decoration-none"><p class="m-0 fw-semibold">Diamond Gold Ring</p></a>
              <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-10.jpg')}}" class="w-100" alt="">
              <div class="product-overlay">
                <div class="product-action-left">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <div class="product-action-right1">
                  <div class="add-btn">Add to Cart</div>
                </div>
              </div>
            </div>
            <a href="/Product/productdetail" class="text-dark text-decoration-none"><p class="m-0 fw-semibold">Crystal Necklace Gold</p></a>
              <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
        </div>
        </div>
    </main>
   </main>
@endsection
