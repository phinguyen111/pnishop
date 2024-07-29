
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trang Quản Trị</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/admin/style.css')}}">

</head>
<body>

<header>
    <h1>Trang Quản Trị</h1>
</header>

<nav>
<ul>
        <li><a href="/Admin">Trang Chủ</a></li>
        <li><a href="/Admin/product">Sản phẩm</a></li>
        <li><a href="/Admin/User">Người dùng</a></li>
        <li><a href="/Admin/updateproduct">Form Cập nhật</a></li>
    </ul>
</nav>

<section>
    <div class="container2">
        <section>
            <form>
                <label for="product_name">Tên sản phẩm:</label><br>
                <input type="text" id="product_name" name="product_name"><br>
                
                <label for="product_price">Giá:</label><br>
                <input type="text" id="product_price" name="product_price"><br>
                
                <label for="product_image">Hình ảnh:</label><br>
                <input type="file" id="product_image" name="product_image"><br>
                
                <input type="submit" value="Cập nhật">
            </form>
        </section>
    </div>
</section>

</body>
</html>
