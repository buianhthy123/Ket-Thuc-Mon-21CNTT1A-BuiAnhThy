@extends('admin.loaisps.layouts.master')
    @section('content1')
    <div>
        @if(session('success'))
            <br>
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <br>
        <div>
            <a href="{{route('admin.getLoaispAdd')}}">
                <button type="button" class="btn btn-outline-primary">Thêm mới</button>
            </a>
        </div>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên loại sản phẩm</th>
                <th>Decriptiom</th>
                <th>Hình ảnh</th>
                <th colspan='2'> <center>Cài đặt</center></th>
            </tr>
            </thead>
            <tbody>
                @isset($loaisps)
                    @php
                        $i=1;
                    @endphp
                    @foreach($loaisps as $sanpham)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$sanpham->name}}</td>
                            <td>{{$sanpham->description}}</td>
                            <td><img src="{{ asset('/source/image/sanpham/'.$sanpham->image) }}" alt="" width="100px" height="50px"/></td>
                            <td>
                                <a href="{{route('admin.getLoaispEdit',[$sanpham->id])}}"><button class="btn btn-outline-primary"><i class="fas fa-cog  fa-lg"></i></button></a>
                            </td>
                            <td>
                                <form action="{{route('admin.getLoaispDelete',[$sanpham->id])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $i=$i+1;
                        @endphp
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
    @endsection
