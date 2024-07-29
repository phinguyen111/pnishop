@extends('admin.layoutad')
@section('contentad')
<div class="page-wrapper">
    <div class="content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper">
                <h1>Tables</h1>
            </div>

            <button type="button" class="btn btn-info btn-pill rounded-0 mb-2" data-toggle="modal"
                data-target="#exampleModalForm">
                Add new Product
            </button>
            <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalFormTitle">Modal Title</h5>
                            <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="{{ route('Admin.products.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name Product</label>
                                    <input type="text" name="name" placeholder="Tên sản phẩm" class="form-control"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="price" placeholder="Giá" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>description</label>
                                    <textarea type="text" name="description" placeholder="mô tả"
                                        class="form-control mb-2" required></textarea>
                                </div>
                               </textarea>
                                <div class="form-group mb-2">
                                    <label for="category_id">Category:</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="product_image" class="form-control" required>
                                </div>
                                <div class="form-group"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-pill"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-pill">Submit</button>

                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalFormTitle">Modal Title</h5>
                            <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="" method="POST" enctype="multipart/form-data" id="editProductForm">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="text" name="price" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" name="quantity" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category:</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="product_image">Image:</label>
                                    <input type="file" name="product_image" class="form-control">
                                    <img src="" alt="" class="img-thumbnail mt-2" id="productImage"
                                        style="width: 150px;">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-table-border-none recent-orders" id="recent-orders">
                        <div class="card-header justify-content-between">
                            <h2>Recent Orders</h2>
                            <div class="date-range-report">
                                <span></span>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th class="d-none d-lg-table-cell">Product Image</th>
                                        <th>Product Name</th>
                                        <th class="d-none d-lg-table-cell">Quantity</th>
                                        <th class="d-none d-lg-table-cell">Sold</th>
                                        <th class="d-none d-lg-table-cell">Price</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allproduct as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td style="width: 12%;"><img src="{{ asset('storage/' . $product->img) }}"
                                                style="width: 100%;" alt=""></td>
                                        <td>
                                            <a class="text-dark" href="">{{ $product->name }}</a>
                                        </td>
                                        <td class="d-none d-lg-table-cell">{{$product->quantity}}</td>
                                        <td class="d-none d-lg-table-cell">{{ $product->sold }}</td>
                                        <td class="d-none d-lg-table-cell">${{ $product->price }}</td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                    id="dropdown-recent-order5" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-display="static"></a>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdown-recent-order5">
                                                    <li class="dropdown-item">
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#exampleModaledit"
                                                            data-product-id="{{ $product->id }}">
                                                            Edit
                                                        </button>
                                                    </li>

                                                    <li class="dropdown-item">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            onclick="deleteProduct({{ $product->id }})">
                                                            Delete
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Thêm liên kết phân trang -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if ($allproduct->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                                    @else
                                    <li class="page-item"><a class="page-link"
                                            href="{{ $allproduct->previousPageUrl() }}">Previous</a></li>
                                    @endif

                                    @for ($i = 1; $i <= $allproduct->lastPage(); $i++)
                                        <li class="page-item {{ ($allproduct->currentPage() == $i) ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $allproduct->url($i) }}">{{ $i }}</a>
                                        </li>
                                        @endfor

                                        @if ($allproduct->hasMorePages())
                                        <li class="page-item"><a class="page-link"
                                                href="{{ $allproduct->nextPageUrl() }}">Next</a></li>
                                        @else
                                        <li class="page-item disabled"><span class="page-link">Next</span></li>
                                        @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-auto">
        <div class="copyright bg-white">
            <p>
                Copyright &copy; <span id="copy-year"></span> a template by <a class="text-primary"
                    href="https://themefisher.com" target="_blank">Themefisher</a>.
            </p>
        </div>
        <script>
            var d = new Date();
            var year = d.getFullYear();
            document.getElementById("copy-year").innerHTML = year;
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const editButtons = document.querySelectorAll('.dropdown-item button');
                editButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        const productId = this.getAttribute('data-product-id');

                        // Fetch product data from server
                        fetch(`/admin/products/${productId}/edit`)
                            .then(response => response.json())
                            .then(product => {
                                // Populate form with product data
                                const form = document.getElementById('editProductForm');
                                form.action = `/admin/products/${productId}`;
                                form.querySelector('input[name="name"]').value = product.name;
                                form.querySelector('input[name="price"]').value = product.price;
                                form.querySelector('textarea[name="description"]').value = product.description;
                                form.querySelector('input[name="quantity"]').value = product.quantity;
                                form.querySelector('select[name="category_id"]').value = product.category_id;
                                form.querySelector('#productImage').src = `/storage/${product.img}`;
                                form.querySelector('#productImage').alt = product.name;
                            })
                            .catch(error => console.error('Error:', error));
                    });
                });
            });
        </script>
        <script>
            function deleteProduct(productId) {
                if (confirm('Are you sure you want to delete this product?')) {
                    fetch(`/admin/products/${productId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Product deleted successfully');
                                location.reload();
                            } else {
                                alert('Error: ' + data.error);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }
            }
        </script>


    </footer>
</div> <!-- End Page Wrapper -->
@endsection