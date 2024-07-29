<div class="container1">
        <div class="sidebar ">
            <ul>
                <li><a href="#personal-info" class="text-primary-custom"><i class="fas fa-user-circle "></i>
                        <pdiv class="fw-bold ">Thông tin cá nhân</pdiv>
                    </a></li>
                <li><a href="#change-password" class="text-primary-custom"><i class="fas fa-key "></i>
                        <pdiv class="fw-bold ">Thay đổi mật khẩu</pdiv>
                    </a></li>
                <li><a href="#order-history " class="text-primary-custom"><i class="fas fa-history "></i>
                        <pdiv class="fw-bold ">Lịch sử giao dịch</pdiv>
                    </a></li>
                <li><a href="#notification-settings" class="text-primary-custom"><i class="fas fa-bell "></i>
                        <pdiv class="fw-bold ">Cài đặt thông báo</pdiv>
                    </a></li>
            </ul>
        </div>
        <div class="content">
            <div id="personal-info" class="content-section">
                <h2><i class="fas fa-user-circle"></i> Thông tin cá nhân</h2>
                <form action="{{ route('account.update', Auth::user()->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('GET')
                    <div class="form-group">
                        <label for="fullname">Họ và tên:</label>
                        <input type="text" id="fullname" name="fullname" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="address" id="address" name="address" value="{{ Auth::user()->address }}">
                    </div>
                        <!-- <div class="form-group">
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ:</label>
                        <input type="text" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="dob">Ngày sinh:</label>
                        <input type="date" id="dob" name="dob">
                    </div> -->
                    <div class="form-group btn-primary-color">
                        <button type="submit">Cập nhật</button>
                    </div>
                   
                </form>

            </div>

            <div id="change-password" class="content-section" style="display: none;">
                <h2><i class="fas fa-key"></i> Thay đổi mật khẩu</h2>
                <div class="form-group">
                    <label for="current-password">Mật khẩu hiện tại:</label>
                    <input type="password" id="current-password" name="current-password">
                </div>
                <div class="form-group">
                    <label for="new-password">Mật khẩu mới:</label>
                    <input type="password" id="new-password" name="new-password">
                </div>
                <div class="form-group">
                    <label for="confirm-new-password">Xác nhận mật khẩu mới:</label>
                    <input type="password" id="confirm-new-password" name="confirm-new-password">
                </div>
                <div class="form-group">
                    <button type="button">Cập nhật</button>
                </div>
            </div>

            <div id="order-history" class="content-section" style="display: none;">
                <h2><i class="fas fa-history"></i> Lịch sử giao dịch</h2>
                <div class="order-history">
                    <table>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tổng giá trị</th>
                            <th>Trạng thái</th>
                            <th>Chi tiết</th>
                        </tr>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{ Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</td>
                            <td>{{$order->total_price}}</td>
                            <td>Hoàn thành</td>
                            <td><button type="button"><a class="text-light text-decoration-none" href="{{ route('history', ['id' => $order->id]) }}">Xem</a></button></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <div id="notification-settings" class="content-section" style="display: none;">
                <h2><i class="fas fa-bell"></i> Cài đặt thông báo</h2>
                <div class="notification-settings">
                    <div class="form-group">
                        <input type="checkbox" id="email-notifications" name="notifications" value="email">
                        <label for="email-notifications">Email thông báo</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="sms-notifications" name="notifications" value="sms">
                        <label for="sms-notifications">Thông báo qua SMS</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="push-notifications" name="notifications" value="push">
                        <label for="push-notifications">Thông báo đẩy</label>
                    </div>
                    <div class="form-group">
                        <button type="button">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>