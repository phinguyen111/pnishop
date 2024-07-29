@extends('layouts.app')

@section('content')
 <main>
   <div class="custom-color">
    <div class="container">
      <div class="row mb-2 pt-4 pb-4 mt-4">
        <div class="col-auto fs-4  fw-semibold">Welcome to ....</div>
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
   <div class="container1">
        <div class="sidebar">
            <ul>
                <li><a href="#personal-info"><i class="fas fa-user-circle"></i> Thông tin cá nhân</a></li>
                <li><a href="#change-password"><i class="fas fa-key"></i> Thay đổi mật khẩu</a></li>
                <li><a href="#order-history"><i class="fas fa-history"></i> Lịch sử giao dịch</a></li>
                <li><a href="#notification-settings"><i class="fas fa-bell"></i> Cài đặt thông báo</a></li>
            </ul>
        </div>
        <div class="content">
            <div id="personal-info" class="content-section">
                <h2><i class="fas fa-user-circle"></i> Thông tin cá nhân</h2>
                <div class="form-group">
                    <label for="fullname">Họ và tên:</label>
                    <input type="text" id="fullname" name="fullname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
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
                </div>
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
                    <button type="button" class="btn-primary-color">Cập nhật</button>
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
                        <tr>
                            <td>001</td>
                            <td>12/05/2023</td>
                            <td>500,000 VNĐ</td>
                            <td>Hoàn thành</td>
                            <td><button type="button">Xem</button></td>
                        </tr>
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
   </main>
@endsection
