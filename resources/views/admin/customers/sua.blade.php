@extends('admin.layouts.master')
@section('content')

<!--/Nav-->
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

        <div class="">

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#log-out">Đăng xuất <span class="log-out"></span></a>
                </li>
                <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
            </ul>
            <div class="modal fade" id="log-out" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận đăng xuất</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn có muốn đăng xuất?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-primary">Đăng xuất</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <br>
    <div class="container">
        <h3>Sửa Cusromers</h3>
        <br>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('admin.postCustomersEdit',$customers[0]->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="uname">Tên </label>
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->name)?$customers[0]->name:''}}" name="name" />
            </div>
            <div class="form-group">
                <label for="uname">Gender</label>
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->gender)?$customers[0]->gender:''}}" name="gender" />
            </div>
            <div class="form-group">
                <label for="uname">Email</label>
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->email)?$customers[0]->email:''}}" name="email" />
            </div>
            <div class="form-group">
                <label for="uname">Địa chỉ</label>
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->address)?$customers[0]->address:''}}" name="address" />
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->phone_number)?$customers[0]->phone_number:''}}" name="phone_number" />
            </div>
            <div class="form-group">
                <label for="">Note</label>
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->note)?$customers[0]->note:''}}" name="note" />
            </div>
            <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
        </form>
    </div>
    @endsection
    <script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>