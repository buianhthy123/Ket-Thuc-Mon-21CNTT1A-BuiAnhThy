@extends('admin.bill.layouts.master')
@section('content1')
    <br>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        <br>
    @endif
    <div>

        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên khách hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thành tiền</th>
                    <th>Trạng thái</th>
                    <th colspan="2">Cài đặt</th>
                </tr>
            </thead>
            <tbody>
                    @php
                        $i=1;
                        $listbill=[];
                        if(isset($billstatus))
                            $listbill=$billstatus;
                        else
                            $listbill=$bills;
                    @endphp
                @isset($listbill)
                    @foreach($listbill as $bill)
                        <tr>
                            <td>{{$i;}}</td>
                            <td>{{ $bill->customer->name ?? 'N/A' }}</td>
                            <td>{{$bill->date_order}}</td>
                            <td>{{$bill->total}}</td>
                            <td>{{$bill->status}}</td>
                            <td><a href="{{ route('admin.updateBillStatus', ['id' => $bill->id, 'status' => $bill->status]) }}"><button class="btn btn-outline-primary"><i class="fas fa-cog fa-lg"></i></button></a></td>
                            <td>
                                <form action="{{ route('admin.cancelBill', ['id' => $bill->id]) }}" method="post" enctype="multipart/form-data">
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