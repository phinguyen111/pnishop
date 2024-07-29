<a href="/cart" class="text-dark text-decoration-none d-none">
  <i class="fa-solid fa-cart-shopping fs-5"></i>
  <span id="cart-count" class="badge bg-primary">{{ App\Helpers\CartHelper::getCartCount() }}</span>
</a>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex">
        <div class="input-group border-bottom border-dark">
          <input type="text" name="query" placeholder="Tìm kiếm" class="form-control border-0 rounded-0 ">
          <div class="input-group-append">
            <button type="submit" class="btn"><i class="fa-solid fa-magnifying-glass text-primary-custom"></i></button>
          </div>
        </div>
      </form>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <a class="navbar-brand mx-auto" href="/">PN Shop</a>
        <div class="d-flex justify-content-between align-items-center gap-3">
          <a href="/login" class="text-dark text-decoration-none"><i class="fa-regular fa-heart fs-5"></i></a>
          <a href="/cart" class="text-dark text-decoration-none position-relative">
            <i class="fa-solid fa-cart-shopping fs-5"></i>
            <span id="cart-count"
              class="badge btn-primary-custom position-absolute top-0 start-100 translate-middle rounded-pill ">{{
              App\Helpers\CartHelper::getCartCount() }}</span>
          </a>


          @guest
          <div class="dropdown">
            <a id="dropdownMenuButton1" class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user-plus fs-5"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            </ul>
          </div>
          @else

          <div class="dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fa-solid fa-user fs-5"></i>
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('account', ['id' => Auth::user()->id]) }}">{{ __('account')
                  }}</a></li>

              <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a></li>
              <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            </ul>
          </div>
          @endguest

        </div>
      </div>
    </div>
  </nav>
  <hr>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-auto border-end border-1 h-100"><a href="/Product"
        class="text-decoration-none text-dark fs-5">Rings</a>
    </div>
    <div class="col-auto border-end border-1 h-100"><a href="" class="text-decoration-none text-dark fs-5">Earrings</a>
    </div>
    <div class="col-auto border-end border-1 h-100"><a href="" class="text-decoration-none text-dark fs-5">Pendants</a>
    </div>
    <div class="col-auto border-end border-1 h-100"><a href="" class="text-decoration-none text-dark fs-5">Necklaces</a>
    </div>
    <div class="col-auto border-end border-1 h-100"><a href="" class="text-decoration-none text-dark fs-5">Bangles</a>
    </div>
    <div class="col-auto border-end border-1 h-100"><a href="" class="text-decoration-none text-dark fs-5">Blog</a>
    </div>
    <div class="col-auto border-end border-1 h-100"><a href="about.html"
        class="text-decoration-none text-dark fs-5">About
        Us</a></div>
    <div class="col-auto "><a href="" class="text-decoration-none text-dark fs-5">More</a></div>
    <div class="col-"></div>

  </div>
</div>
@if(session('status'))
<script>
  window.onload = function () {
    Swal.fire({
      title: 'Thành công!',
      text: "{{ session('status') }}",
      icon: 'success',
      timer: 1000,
      timerProgressBar: true,
      showConfirmButton: false,
      didOpen: () => {
        const content = Swal.getContent();
        const $ = content.querySelector.bind(content);
        Swal.showLoading();
      },
      willClose: () => {
        Swal.close();
      }
    });
  };
</script>
@endif
@if(session('error'))
<script>
  window.onload = function () {
    Swal.fire({
      title: 'Lỗi!',
      text: "{{ session('error') }}",
      icon: 'error',
      timer: 2000,
      timerProgressBar: true,
      showConfirmButton: false,
      didOpen: () => {
        const content = Swal.getContent();
        const $ = content.querySelector.bind(content);
        Swal.showLoading();
      },
      willClose: () => {
        Swal.close();
      }
    });
  };
</script>
@endif
