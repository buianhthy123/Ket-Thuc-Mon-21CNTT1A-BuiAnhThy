@extends('admin.loaisps.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h1>Sửa nhà cung cấp</h1>
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
        @isset($nhaccs) 
        <form action="{{route('admin.postNhaccEdit',$nhaccs[0]->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put') 
            <div class="form-group">
                <label for="uname">Tên Nhà Cung Cấp</label>
                <input type="text" class="form-control" id="name" value="{{isset($nhaccs[0]->name)?$nhaccs[0]->name:''}}" name="name"/>
            </div>
            
            <div class="form-group">
              <label for="">Địa Chỉ</label>
              <textarea class="form-control" name="address" id="" rows="3">{{ isset($nhaccs[0]->address)?$nhaccs[0]->address:'' }}</textarea>
            </div>

            <div class="form-group">
              <label for="">Số ĐT</label>
              <textarea class="form-control" name="phone_number" id="" rows="3">{{ isset($nhaccs[0]->phone_number)?$nhaccs[0]->phone_number:'' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Sửa Nhà Cung Cấp</button>
        </form>
        @endisset
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>