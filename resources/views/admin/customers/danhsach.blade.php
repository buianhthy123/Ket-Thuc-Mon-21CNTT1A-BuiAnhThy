  
   @extends('admin.customers.layouts.master')
    @section('content1')
    <div>
        @if(session('success'))
            <br>
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <br>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Address</th>
                <th>phone_number</th>
                <th>note</th>
                <th colspan='2'> <center>Cài đặt</center></th>
            </tr>
            </thead>
            <tbody>
                @isset($customers)
                    @php
                        $i=1;
                    @endphp
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->gender}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->phone_number}}</td>
                            <td>
                               {{$customer->note}}
                            <td>
                                <a href="{{route('admin.getCustomersEdit',[$customer->id])}}"><button class="btn btn-outline-primary"><i class="fas fa-cog  fa-lg"></i></button></a>
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