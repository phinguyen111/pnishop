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
        <div class="custom-color p-2 mb-2">
          <a href="#" class="text-decoration-none text-dark fw-semibold">Home</a>
        </div>
        <div class="mb-2">
          <a href="#" class="text-decoration-none text-dark fw-normal p-2">Rings</a>
        </div>
        <div class="mb-2">
          <a href="#" class="text-decoration-none text-dark fw-normal p-2">Earrings</a>
        </div>
        <div class="mb-2">
          <a href="#" class="text-decoration-none text-dark fw-normal p-2">Pendants</a>
        </div>
        <div class="mb-2">
          <a href="#" class="text-decoration-none text-dark fw-normal p-2">Necklaces</a>
        </div>
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
        <!-- <div class="row mb-2">
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-1.jpg')}}" class="w-100" alt="">
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
              <p class="m-0"><strong>Diamond Drop Dangling</strong></p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-2.jpg')}}" class="w-100" alt="">
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
              <p class="m-0"><strong>Monogram Necklace</strong></p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-3.jpg')}}" class="w-100" alt="">
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
              <p class="m-0"><strong>Personalized Initial Ring</strong></p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-4.jpg')}}" class="w-100" alt="">
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
              <p class="m-0"><strong>Sterling silver necklace</strong></p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-5.jpg')}}" class="w-100" alt="">
              <div class="product-overlay">
                <div class="product-action-left">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <div class="product-action-right1">
                  <div class="add-btn"><a href="/cart" class="text-light text-decoration-none"> Add to Cart</a></div>
                </div>
              </div>
            </div>
            <p class="m-0"><strong>Diamond Wedding Band</strong></p>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
        </div> -->
        <div class="row mb-2">
          @foreach($products as $product)
          <div class="product">
            <h2>{{ $product->name }}</h2>
            <img src="{{ $product->img }}" alt="{{ $product->name }}">
            <p>{{ $product->description }}</p>
            <p>Giá: {{ $product->price }}$</p>
            <p>Số lượng còn lại: {{ $product->quantity }}</p>
            @if ($product->quantity == 0)
            <button disabled>Hết hàng</button>
            @else
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <input type="number" name="quantity" value="1" min="1" max="{{ $product->quantity }}">
              <button type="submit">Thêm vào giỏ hàng</button>
            </form>
            @endif
          </div>
          @endforeach

          <!-- <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-7.jpg')}}" class="w-100" alt="">
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
              <p class="m-0 fw-semibold">Beautiful Crystals Jewelry</p>
            </a>
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
                  <div class="add-btn"><a href="/cart" class="text-light text-decoration-none"> Add to Cart</a></div>
                </div>
              </div>
            </div>
            <a href="/Product/productdetail" class="text-dark text-decoration-none">
              <p class="m-0 fw-semibold">Bridal Ring Silver</p>
            </a>
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
                  <div class="add-btn"><a href="/cart" class="text-light text-decoration-none"> Add to Cart</a></div>
                </div>
              </div>
            </div>
            <a href="/Product/productdetail" class="text-dark text-decoration-none">
              <p class="m-0 fw-semibold">Diamond Gold Ring</p>
            </a>
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
                  <div class="add-btn"><a href="/cart" class="text-light text-decoration-none"> Add to Cart</a></div>
                </div>
              </div>
            </div>
            <a href="/Product/productdetail" class="text-dark text-decoration-none">
              <p class="m-0 fw-semibold">Crystal Necklace Gold</p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div> -->
        </div>
        <div class='container-fluid'>
        <div class="card mx-auto col-md-3 col-10 mt-5">
            <img class='mx-auto img-thumbnail'
                src="https://i.imgur.com/pjITBzX.jpg"
                width="auto" height="auto"/>
            <div class="card-body text-center mx-auto">
                <div class='cvp'>
                    <h5 class="card-title font-weight-bold">Yail wrist watch</h5>
                    <p class="card-text">$299</p>
                    <a href="#" class="btn details px-auto">view details</a><br />
                    <a href="#" class="btn cart px-auto">ADD TO CART</a>
                </div>
            </div>
        </div>

    </div>

        <!-- <div class="row mb-2">
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-11.jpg')}}" class="w-100" alt="">
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
              <p class="m-0 fw-semibold">Monogram Necklace</p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="img/25-home_default.jpg" class="w-100" alt="">
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
              <p class="m-0 fw-semibold">Diamond Drop Dangling</p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-12.jpg')}}" class="w-100" alt="">
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
              <p class="m-0 fw-semibold">Silver Bracelet Inlaid</p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-13.jpg')}}" class="w-100" alt="">
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
              <p class="m-0 fw-semibold">Trinity Rolling Band</p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
          <div class="col text-center product-item">
            <div class="product-image-container">
              <img src="{{asset('img/img-14.jpg')}}" class="w-100" alt="">
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
              <p class="m-0 fw-semibold">Trinity Rolling Band</p>
            </a>
            <div class="review-rating text-warning">★★★★☆</div>
            <p class="m-0 text-primary-custom fw-semibold">$128</p>
          </div>
        </div>
        <div class="row ms-5">
          <div class="col-4"></div>
          <div class="col">
            <nav aria-label="Page navigation example ">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</main>
@endsection