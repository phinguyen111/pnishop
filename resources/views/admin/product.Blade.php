<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">

</head>

<body>

    <header>
        <h1>Trang Quản Trị</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/Admin">Trang Chủ</a></li>
            <li><a href="/Admin/products">Sản phẩm</a></li>
            <li><a href="/Admin/User">Người dùng</a></li>
            <li><a href="/Admin/updateproduct">Form Cập nhật</a></li>
        </ul>
    </nav>
    @if(session('success'))
            <script>
                window.onload = function() {
                    toastr.success("{{ session('success') }}");
                };
            </script>
        @endif
    <section>
        <div class="container">
            <div class="col3">
                <h2>Thêm Mới Sản Phẩm</h2>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Tên sản phẩm" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" placeholder="Giá" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="product_image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Thêm" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="col9">
                <h2>Danh Sách Sản Phẩm</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hình ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Lượt xem</th>
                            <th>Lượt bán</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allproduct as $product)

                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ $product->img }}" class="w-25" alt=""></td>
                            <td>{{ $product->name }}</td>
                            <td>${{$product -> price}}</td>
                            <td>50</td>
                            <td>10</td>
                            <td class="action-icons">
                                <a href="#"><i class="fas fa-edit"></i></a>
                                <!-- $delete -->
                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section>

</body>

</html>