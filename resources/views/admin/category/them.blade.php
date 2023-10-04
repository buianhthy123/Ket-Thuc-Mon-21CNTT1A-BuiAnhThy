@extends('admin.category.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h1>Thêm sản phẩm</h1>
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
        <form action="{{route('admin.postCateAdd')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="uname">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" placeholder="Tên sản phẩm" name="name"/>
            </div>
            <div class="form-group">
                <label for="">Loại sản phẩm</label>
                <select class="form-control" name="id_loaisp" id="">
                    @isset($sanphams)    
                        @foreach($sanphams as $loaisp)
                            <option value="{{$loaisp->id}}">{{$loaisp->name}}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <div class="form-group">
              <label for="">Mô tả</label>
              <textarea class="form-control" name="mota" id="" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="uname">Giá tiền</label>
                <input type="number" class="form-control" id="name" placeholder="Giá gốc" name="giatien"/>
            </div>
            <div class="form-group">
                <label for="uname">Giá sau khi giảm</label>
                <input type="number" class="form-control" id="name" placeholder="Giá sau khi giảm" name="giamgia"/> 
            </div>
            <div class="form-group">
              <label for="">Hình ảnh</label>
              <input type="file" class="form-control-file" name="image" id="" onchange="previewImage(this);" />
              <img id="preview"width="200" height="100" class="img-thumbnail"/>
            </div>
            <div class="form-group">
              <label for="">Đơn vị</label>
              <input type="text" class="form-control" id="name" placeholder="Đơn vị" name="donvi"/>
            </div>
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>