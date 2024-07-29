@extends('layout')
@section('title','PNshop')
@section('title2','welcome to san pham 1')
@section('content')

   <main>
   <div class="custom-color">
    <div class="container">
      <div class="row mb-2 pt-4 pb-4 mt-4">
        <div class="col-auto fs-4 fw-semibold">Login</div>
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
 <div class="row mt-5 mb-5">
    <div class="col-3"></div>
    <div class="col">
        <div class="card " style="background-color: white;">
            <div class="card-header" style="background-color: white;">
                <div class="container">
                    <div class="login-container">
                      <form>
                        <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" class="form-control" id="username" placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                      </form>
                    </div>
                  </div>
                  <div class=" text-center"  style="background-color: white;">
                      <a href="/register" class="text-dark text-decoration-none">No account? Create one here</a>
                  </div>
            </div>
          </div>
    </div>
    <div class="col-3"></div>
 </div>
   </main>
@endsection
