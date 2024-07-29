@extends('layout')
@section('title','PNshop')
@section('content')

<main>
  <div class="mt-4 w-100">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Main-Banner-02.jpg" class="d-block w-100" alt="Image 1">
          <div class="product-text">
            <p class="fs-3 w-75">Up To 50% Discount</p>
            <p class="fs-1 w-75">Model Presenting Necklace</p>
            <p class="fs-5 w-75">There are many variations of passages of Lorem Ipsum available but the majority have
              suffered alteration.</p>
            <div class="btn btn-primary-custom text-light rounded-0 fw-medium ps-3 pe-3 pt-2 pb-2">Shop Now</div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Main-Banner-02.jpg" class="d-block w-100" alt="Image 2">
          <div class="product-text">
            <p class="fs-3 w-75">Up To 50% Discount</p>
            <p class="fs-1 w-75">Model Presenting Necklace</p>
            <p class="fs-5 w-75">There are many variations of passages of Lorem Ipsum available but the majority have
              suffered alteration.</p>
            <div class="btn btn-primary-custom text-light rounded-0 fw-medium ps-3 pe-3 pt-2 pb-2">Shop Now</div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Main-Banner-02.jpg" class="d-block w-100" alt="Image 3">
          <div class="product-text">
            <p class="fs-3 w-75">Up To 50% Discount</p>
            <p class="fs-1 w-75">Model Presenting Necklace</p>
            <p class="fs-5 w-75">There are many variations of passages of Lorem Ipsum available but the majority have
              suffered alteration.</p>
            <div class="btn btn-primary-custom text-light rounded-0 fw-medium ps-3 pe-3 pt-2 pb-2">Shop Now</div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
 
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col-4">
        <h5>Our Best Collections</h5>
        <h3><strong>Jewellery Online at the Most Affordable Price</strong></h3>
      </div>
      <div class="col-auto d-flex gap-3">
        <img src="img/25-home_default.jpg" class="w-100" alt="">
        <img src="img/31-home_default.jpg" class="w-100" alt="">
        <img src="img/37-home_default.jpg" class="w-100" alt="">
      </div>
    </div>
    <hr>
    <div class="mb-5">
      <div class="d-flex justify-content-center mt-5 mb-2">
        <h2 class="text-center border-bottom border-4 rounded-1 w-25">Featured Products</h2>
      </div>
      <div class="row mb-5">
        @foreach($mostViewedProducts as $product)
        <div class="col text-center product-item">
          <div class="product-image-container">
            <img src="http://127.0.0.1:8000/storage/{{$product -> img}}" class="w-100" alt="">
            <div class="product-overlay">
              <div class="product-action-left">
                <i class="fa-regular fa-heart"></i>
              </div>
              <div class="product-action-right1">
                <div class="add-btn"><a href="/cart" class="text-light text-decoration-none"> Add to Cart</a></div>
              </div>
            </div>
          </div>
          <a href="/Product/productdetail" class="text-dark text-decoration-none">
            <p class="m-0"><strong>{{$product -> name}}</strong></p>
          </a>
          <div class="review-rating text-warning">★★★★☆</div>
          <p class="m-0 text-primary-custom fw-semibold">${{$product -> price}}</p>
        </div>
        @endforeach

      </div>
    </div>
  </div>
  <div class="custom-color d-flex align-items-center justify-content-center" style="height: 40vh;">
    <div class="container-fluid">
      <div class="row justify-content-center text-center">
        <div class="col-1"></div>
        <div class="col border border-1 bg-light m-3">
          <i class="fa-regular fa-paper-plane fs-2 mt-3"></i>
          <p class="fs-5"><strong>Worldwide Shipping</strong></p>
          <div class="review-rating text-warning">★★★★☆</div>
          <p>Regarding shipping, we'll take care of everything to ensure your order arrives smoothly and on time</p>
        </div>
        <div class="col border border-1 bg-light m-3">
          <i class="fa-solid fa-rotate-left fs-2 mt-3"></i>
          <p class="fs-5"><strong>Easy 30 Day Returns</strong></p>
          <div class="review-rating text-warning">★★★★☆</div>
          <p>Regarding shipping, we'll take care of everything to ensure your order arrives smoothly and on time</p>
        </div>
        <div class="col border border-1 bg-light m-3">
          <i class="fa-solid fa-coins fs-2 mt-3"></i>
          <p class="fs-5"><strong>Money Back Guarantee</strong></p>
          <div class="review-rating text-warning">★★★★☆</div>
          <p>Regarding shipping, we'll take care of everything to ensure your order arrives smoothly and on time</p>
        </div>
        <div class="col border border-1 bg-light m-3">
          <i class="fa-solid fa-headset fs-1 mt-3 "></i>
          <p class="fs-5"><strong>Easy Online Support</strong></p>
          <div class="review-rating text-warning">★★★★☆</div>
          <p>Regarding shipping, we'll take care of everything to ensure your order arrives smoothly and on time</p>
        </div>
        <div class="col-1"></div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="mb-5">
      <div class="d-flex justify-content-center mt-5 mb-2">
        <h2 class="text-center border-bottom border-4 rounded-1 w-25">Latest Products</h2>
      </div>
      <div class="row mt-5">
        @foreach($latestProducts as $product)
        <div class="col text-center product-item">
          <div class="product-image-container">
            <img src="http://127.0.0.1:8000/storage/{{$product -> img}}" class="w-100" alt="">
            <div class="product-overlay">
              <div class="product-action-left">
                <i class="fa-regular fa-heart"></i>
              </div>
              <div class="product-action-right1">
                <div class="add-btn"><a href="/cart" class="text-light text-decoration-none"> Add to Cart</a></div>
              </div>
            </div>
          </div>
          <a href="/Product/productdetail" class="text-dark text-decoration-none">
            <p class="m-0"><strong>{{$product -> name}}</strong></p>
          </a>
          <div class="review-rating text-warning">★★★★☆</div>
          <p class="m-0 text-primary-custom fw-semibold">${{$product -> price}}</p>
        </div>
        @endforeach
      </div>
    </div>
    <div class="row d-flex gap-1">
      <div class="col">
        <div class="banner-2">
          <img src="img/sub-banner-1.jpg" class="w-100" alt="Banner">
          <div class="product-text-2">
            <p class="fs-5">Flat 30% Discount</p>
            <p class="fs-4">Stylish Beautiful
              Earrings</p>
            <div class="btn btn-primary-custom text-light rounded-0 fw-medium ps-3 pe-3 pt-2 pb-2">Shop Now</div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="banner-2">
          <img src="img/sub-banner-2.jpg" class="w-100" alt="Banner">
          <div class="product-text-2">
            <p class="fs-5">Flat 20% Discount</p>
            <p class="fs-4">Stylish Diamond Ring</p>
            <div class="btn btn-primary-custom text-light rounded-0 fw-medium ps-3 pe-3 pt-2 pb-2">Shop Now</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="mb-5">
      <div class="d-flex justify-content-center mt-5 mb-2">
        <h2 class="text-center border-bottom border-4 rounded-1 w-25">Special Products</h2>
      </div>
      <div class="row mt-5">
        @foreach($latestProducts as $product)
        <div class="col text-center product-item">
          <div class="product-image-container">
            <img src="http://127.0.0.1:8000/storage/{{$product -> img}}" class="w-100" alt="">
            <div class="product-overlay">
              <div class="product-action-left">
                <i class="fa-regular fa-heart"></i>
              </div>
              <div class="product-action-right1">
                <div class="add-btn"><a href="/cart" class="text-light text-decoration-none"> Add to Cart</a></div>
              </div>
            </div>
          </div>
          <a href="/Product/productdetail" class="text-dark text-decoration-none">
            <p class="m-0"><strong>{{$product -> name}}</strong></p>
          </a>
          <div class="review-rating text-warning">★★★★☆</div>
          <p class="m-0 text-primary-custom fw-semibold">${{$product -> price}}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="mt-4 w-100">
    <div class="banner">
      <img src="img/cms-banner.jpg" class="w-100" alt="Banner">
      <div class="product-text">
        <p class="fs-3 w-75">Up To 50% Discount</p>
        <p class="fs-1 w-75">Model Presenting Necklace</p>
        <p class="fs-5 w-75">There are many variations of passages of Lorem Ipsum available but the majority have
          suffered alteration.</p>
        <div class="btn btn-primary-custom text-light rounded-0 fw-medium ps-3 pe-3 pt-2 pb-2">Shop Now</div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="mb-5">
      <div class="d-flex justify-content-center mt-5 mb-2">
        <h2 class="text-center border-bottom border-4 rounded-1 w-25">From The Blog</h2>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card">
            <img src="img/lg-b-blog-5.jpg" class="card-img-top" alt="Blog Post 1">
            <div class="card-body">
              <h5 class="card-title">Latest Trends in Jewelry</h5>
              <p class="card-text">Discover the newest trends in jewelry for 2024. From statement pieces to minimalist
                designs, find out what’s in vogue this year.</p>
              <a href="blog1.html"
                class="btn btn-primary-custom text-light rounded-0 fw-medium ps-3 pe-3 pt-2 pb-2">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/lg-b-blog-4.jpg" class="card-img-top" alt="Blog Post 2">
            <div class="card-body">
              <h5 class="card-title">Caring for Your Jewelry</h5>
              <p class="card-text">Learn how to properly care for your jewelry to keep it looking beautiful and lasting
                longer. Our guide includes cleaning tips and storage advice.</p>
              <a href="blog2.html"
                class="btn btn-primary-custom text-light rounded-0 fw-medium ps-3 pe-3 pt-2 pb-2">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/lg-b-blog-6.jpg" class="card-img-top" alt="Blog Post 3">
            <div class="card-body">
              <h5 class="card-title">How to Choose the Perfect Engagement Ring</h5>
              <p class="card-text">Choosing an engagement ring is a big decision. Our guide will help you find the
                perfect ring that fits....</p>
              <a href="blog3.html"
                class="btn btn-primary-custom text-light rounded-0 fw-medium ps-3 pe-3 pt-2 pb-2">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection