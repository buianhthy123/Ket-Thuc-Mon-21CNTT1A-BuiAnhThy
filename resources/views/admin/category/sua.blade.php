@extends('admin.category.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h3>Sửa sản phẩm</h3>
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
        <form action="{{route('admin.postCateEdit',$sanphams[0]->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put') 
            <div class="form-group">
                <label for="uname">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" value="{{isset($sanphams[0]->name)?$sanphams[0]->name:''}}" name="name"/>
            </div>
            <div class="form-group">
                <label for="">Loại sản phẩm</label>
                <select class="form-control" name="id_loaisp" id="">  
                    <option value="{{$sanphams[0]->id_loaisp}}">{{$sanphams[0]->Loaisp->name}}</option>
                    @isset($loaisp)
                        @foreach($loaisp as $loai)
                            @if($loai->id != $sanphams[0]->id)
                                <option value="{{$loai->id}}">{{$loai->name}}</option>
                            @endif
                        @endforeach
                    @endisset
                </select>
            </div>
            <div class="form-group">
              <label for="">Mô tả</label>
              <textarea class="form-control" name="mota" id="" rows="3">{{ isset($sanphams[0]->mota)?$sanphams[0]->mota:'' }}</textarea>
            </div>
            <div class="form-group">
                <label for="uname">Giá tiền</label>
                <input type="number" class="form-control" id="name" value="{{isset($sanphams[0]->giatien)?$sanphams[0]->giatien:''}}" name="giatien"/>
            </div>
            <div class="form-group">
                <label for="uname">Giá sau khi giảm</label>
                <input type="number" class="form-control" id="name" value="{{isset($sanphams[0]->giamgia)?$sanphams[0]->giamgia:''}}" name="giamgia"/>
            </div>
            <div class="form-group">
              <label for="">Hình ảnh</label>
              <input type="file" class="form-control-file" name="image" id="" onchange="previewImage(this);" />
              Hình ảnh trước khi đổi: <img src="{{ asset('/source/image/sanpham/'.$sanphams[0]->image) }}" width="200" height="100" class="img-thumbnail"/>  Hình ảnh sau khi đổi:<img id="preview"width="200" height="100" class="img-thumbnail"/>
            </div>
            <div class="form-group">
              <label for="">Đơn vị</label>
              <input type="text" class="form-control" id="name" value="{{isset($sanphams[0]->donvi)?$sanphams[0]->donvi:''}}" name="donvi"/>
            </div>
            <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
        </form>
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>