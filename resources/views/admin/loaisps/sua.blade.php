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
        <h1>Sửa loại sản phẩm</h1>
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
        @isset($loaisps)
        <form action="{{route('admin.postLoaispEdit',$loaisps[0]->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="uname">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" value="{{isset($loaisps[0]->name)?$loaisps[0]->name:''}}" name="name" />
            </div>

            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea class="form-control" name="mota" id="mota" rows="3">{{isset($mota[0]->name)?$mota[0]->name:''}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh</label>
                <input type="file" class="form-control-file" name="image" id="" onchange="previewImage(this);" />
                Hình ảnh trước khi đổi: <img src="{{ asset('/source/image/sanpham/'.$loaisps[0]->image) }}" width="200" height="100" class="img-thumbnail" /> Hình ảnh sau khi đổi:<img id="preview" width="200" height="100" class="img-thumbnail" />
            </div>
            <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
        </form>
        @endisset
    </div>
    @endsection
    <script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>