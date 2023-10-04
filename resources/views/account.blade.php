@extends('layouts.master')
@section('content')
<div class="content">
    <div class="container">
        <div class="box">
            <div class="row-account">
                <div class="left-container">
                    <div class="user-infor">
                        <img src="images/user-img.png" alt="">
                        <span>{{ isset($user->full_name) ? $user->full_name : '' }}</span>
                    </div>
                    <div class="side-bar-content">
                        <ul>
                            <li class="slide-bar active"><span>Thông tin tài khoản</span></li>
                            </br>
                            <!-- Đường dẫn đến các trang khác ở đây -->
                            <li class="slide-bar"><a href="#"><i class="fas fa-map-marker-alt"></i><span> Địa chỉ nhận hàng</span></a></li>
                            <li class="slide-bar"><a href="#"><span> Đổi mật khẩu</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="right-container">
                    <h3 class="title-content">Thông tin tài khoản</h3>
                    <div class="account-infor">
                        <form action="" method="POST">
                            @csrf <!-- Đoạn này để bảo vệ form khỏi tấn công CSRF -->
                            <div class="form-control">
                                <label for="full_name" class="input-label">
                                    Họ & tên
                                </label>
                                <input type="text" id="full_name" name="full_name" placeholder="Thêm họ tên" class="input-field" value="{{ isset($user->full_name) ? $user->full_name : '' }}">
                            </div>
                            <div class="form-control">
                                <label for="email" class="input-label">
                                    Email
                                </label>
                                <input type="email" id="email" name="email" placeholder="Thêm email" class="input-field" value="{{ isset($user->email) ? $user->email : '' }}">
                            </div>

                            <div class="form-control">
                                <label for="phone" class="input-label">
                                    Số điện thoại
                                </label>
                                <input type="phone" id="phone" name="phone" placeholder="Thêm số điện thoại" class="input-field" value="{{ isset($user->phone) ? $user->phone : '' }}">
                            </div>
                            <div class="form-control">
                                <label for="address" class="input-label">
                                    Địa chỉ
                                </label>
                                <input type="text" id="address" name="address" placeholder="Địa chỉ" class="input-field" value="{{ isset($user->address) ? $user->address : '' }}">
                            </div>

                            <div class="form-control">
                                <label class="input-label">
                                    Giới tính
                                </label>

                                <input type="radio" id="male" name="gender" value="male" {{ isset($user->gender) && $user->gender === 'male' ? 'checked' : '' }} class="input-radio"> Nam
                                <input type="radio" id="female" name="gender" value="female" {{ isset($user->gender) && $user->gender === 'female' ? 'checked' : '' }} class="input-radio"> Nữ
                                <input type="radio" id="other" name="gender" value="other" {{ isset($user->gender) && $user->gender === 'other' ? 'checked' : '' }} class="input-radio"> Khác

                            </div>

                            <button type="submit" class="btn-update">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.login-form -->
@endsection