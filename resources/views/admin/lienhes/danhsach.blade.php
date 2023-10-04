@extends('admin.lienhes.layouts.master')
    @section('content1')
    <div>
        @if(session('success'))
            <br>
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên người liên hệ</th>
                <th>Số ĐT</th>
                <th>Nội dung liên hệ</th>
                <th colspan='2'> <center>Cài đặt</center></th>
            </tr>
            </thead>
            <tbody>
                @isset($lienhes)
                    @php
                        $i=1;
                    @endphp
                    @foreach($lienhes as $lienhe)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$lienhe->name}}</td>
                            <td>{{$lienhe->email}}</td>
                            <td>{{$lienhe->phone_number}}</td>
                            <td>{{$lienhe->mota}}</td>
                            <td>
                                <form action="{{route('admin.getLienheDelete',[$lienhe->id])}}" method="post">
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
