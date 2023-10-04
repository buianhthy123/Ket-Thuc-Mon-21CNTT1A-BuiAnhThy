@extends('admin.nhaccs.layouts.master')
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
            <a href="{{route('admin.getNhaccAdd')}}">
                <button type="button" class="btn btn-outline-primary">Thêm mới</button>
            </a>
        </div>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên Nhà Cung Cấp</th>
                <th>Địa Chỉ</th>
                <th>Số ĐT</th>
                <th colspan='2'> <center>Cài đặt</center></th>
            </tr>
            </thead>
            <tbody>
                @isset($nhaccs)
                    @php
                        $i=1;
                    @endphp
                    @foreach($nhaccs as $nhacc)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$nhacc->name}}</td>
                            <td>{{$nhacc->address}}</td>
                            <td>{{$nhacc->phone_number}}</td>
                            <td>
                                <a href="{{route('admin.getNhaccEdit',[$nhacc->id])}}"><button class="btn btn-outline-primary"><i class="fas fa-cog  fa-lg"></i></button></a>
                            </td>
                            <td>
                                <form action="{{route('admin.getNhaccDelete',[$nhacc->id])}}" method="post">
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
