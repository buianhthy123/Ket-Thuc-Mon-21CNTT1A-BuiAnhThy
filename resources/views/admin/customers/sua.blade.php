@extends('admin.category.layouts.master')
@section('content1')
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
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->name)?$customers[0]->name:''}}" name="name"/>
            </div>
            <div class="form-group">
                <label for="uname">Gender</label>
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->gender)?$customers[0]->gender:''}}" name="gender"/>
            </div>
            <div class="form-group">
                <label for="uname">Email</label>
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->email)?$customers[0]->email:''}}" name="email"/>
            </div>
            <div class="form-group">
                <label for="uname">Địa chỉ</label>
                <input type="text" class="form-control" id="name" value="{{isset($customers[0]->address)?$customers[0]->address:''}}" name="address"/>
            </div>
            <div class="form-group">
              <label for="">Số điện thoại</label>
              <input type="text" class="form-control" id="name" value="{{isset($customers[0]->phone_number)?$customers[0]->phone_number:''}}" name="phone_number"/>
            </div>
            <div class="form-group">
              <label for="">Note</label>
              <input type="text" class="form-control" id="name" value="{{isset($customers[0]->note)?$customers[0]->note:''}}" name="note"/>
            </div>
            <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
        </form>
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>