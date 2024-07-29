<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
        <div class="container">
            <div class="col3">
                <h2>Thêm Mới</h2>
                <form>
                    <input type="text" placeholder="Tên">
                    <input type="text" placeholder="Email">
                    <input type="submit" value="Thêm">
                </form>
            </div>
            <div class="col9">
                <h2>Danh Sách</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Tổng tiền</th>
                            <th>Thành Viên</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->total_price }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td><button class="btn btn-primary view-details" data-id="{{ $order->id }}">Xem chi tiết</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Order Details Modal -->
        <div class="modal fade" id="orderDetailsModal" tabindex="-1" role="dialog" aria-labelledby="orderDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderDetailsModalLabel">Chi tiết đơn hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <th>ID đơn hàng</th>
                                <td id="orderId"></td>
                            </tr>
                            <tr>
                                <th>Người dùng</th>
                                <td id="orderUser"></td>
                            </tr>
                            <tr>
                                <th>Tổng giá</th>
                                <td id="orderTotalPrice"></td>
                            </tr>
                            <tr>
                                <th>Ngày tạo</th>
                                <td id="orderCreatedAt"></td>
                            </tr>
                        </table>

                        <h3>Chi tiết sản phẩm</h3>
                        <table id="orderItemsTable" class="table">
                            <thead>
                                <tr>
                                    <th>ID sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dynamic Content -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.view-details').forEach(button => {
                button.addEventListener('click', function () {
                    const orderId = this.getAttribute('data-id');
                    fetch(`/admin/orders/${orderId}/details`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.message) {
                                alert(data.message);
                                return;
                            }

                            document.getElementById('orderId').innerText = data.id;
                            document.getElementById('orderUser').innerText = data.user.name;
                            document.getElementById('orderTotalPrice').innerText = data.total_price;
                            document.getElementById('orderCreatedAt').innerText = data.created_at;

                            const itemsTableBody = document.getElementById('orderItemsTable').querySelector('tbody');
                            itemsTableBody.innerHTML = '';
                            data.order_items.forEach(item => {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                                    <td>${item.product.id}</td>
                                    <td>${item.product.name}</td>
                                    <td>${item.quantity}</td>
                                    <td>${item.price}</td>
                                `;
                                itemsTableBody.appendChild(row);
                            });

                            $('#orderDetailsModal').modal('show');
                        })
                        .catch(error => {
                            alert('Có lỗi xảy ra, vui lòng thử lại');
                        });
                });
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
