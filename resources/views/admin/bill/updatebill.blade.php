@extends('admin.layouts.master')
@section('content')

<!--/Nav-->
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <div class="">

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#log-out">Đăng xuất <span class="log-out"><i class="fas fa-arrow-right"></i></span></a>
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


    <div class="border mb-2">
        <h4 class="text-center mt-3 mb-4"></h4>

        <div class="container">
            @isset($bill)
            @php
            $i=1;
            @endphp
            <table class="table table-hover table-text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" valign="middle">Chủ đề</th>
                        <th scope="col" valign="middle">Nội dung</th>
                    </tr>
                </thead>
                <tbody id="content-table">
                    <!-- Các dòng dữ liệu ở đây -->
                    <tr>
                        <td>Tên khách hàng</td>
                        <td>{{$bill[0]->customer->name}}</td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td>{{$bill[0]->customer->gender}}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>{{$bill[0]->customer->address}}</td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>{{$bill[0]->customer->phone_number}}</td>
                    </tr>
                    <tr>
                        <td>Ghi chú</td>
                        <td>{{$bill[0]->note}}</td>
                    </tr>
                    @isset($billdetail)
                    @foreach($billdetail as $billdetail)
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Sản phẩm {{$i}}</td>
                        <td>{{$billdetail->sanpham->name}}</td>
                    </tr>
                    <tr>
                        <td>Số lượng</td>
                        <td>{{$billdetail->quantity}}</td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td><img src="{{ asset('/source/image/sanpham/'.$billdetail->sanpham->image) }}" class="img-thumbnail" alt="" width="200px" height="100px" /></td>
                    </tr>
                    <tr>
                        <td>Giá tiền</td>
                        <td>{{$billdetail->unit_price}} VNĐ</td>
                    </tr>
                    @php
                    $i=$i+1;
                    @endphp
                    @endforeach
                    @endisset
                    <tr>
                        <td>Thành tiền</td>
                        <td>{{$bill[0]->total}} VNĐ</td>
                    </tr>
                    <tr>
                        <td>Phương thức thanh toán</td>
                        <td>
                            @if($bill[0]->payment=="COD")
                            Tiền mặt
                            @else
                            Chuyển khoảng
                            @endif
                        </td>
                    </tr>
                    <form action="{{ route('admin.updateBillStatusAjax', ['id' => $bill[0]->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <tr>
                            <td>Trang thái</td>
                            <td>
                                <select class="form-control" style="width: 30%;" name="status" id="">
                                    @if($bill[0]->status == "đang chuẩn bị hàng")
                                    <option value="đang chuẩn bị hàng" selected>Đang chuẩn bị hàng</option>
                                    <option value="đang giao hàng">Đang giao hàng</option>
                                    <option value="đã giao hàng">Đã giao hàng</option>
                                    <option value="đã hủy đơn hàng">Đã hủy đơn hàng</option>
                                    @elseif($bill[0]->status == "đang giao hàng")
                                    <option value="đang chuẩn bị hàng">Đang chuẩn bị hàng</option>
                                    <option value="đang giao hàng" selected>Đang giao hàng</option>
                                    <option value="đã giao hàng">Đã giao hàng</option>
                                    <option value="đã hủy đơn hàng">Đã hủy đơn hàng</option>
                                    @elseif($bill[0]->status == "đã hủy đơn hàng")
                                    <option value="đang chuẩn bị hàng">Đang chuẩn bị hàng</option>
                                    <option value="đang giao hàng">Đang giao hàng</option>
                                    <option value="đã giao hàng">Đã giao hàng</option>
                                    <option value="đã hủy đơn hàng" selected>Đã hủy đơn hàng</option>
                                    @else
                                    <option value="đang chuẩn bị hàng">Đang chuẩn bị hàng</option>
                                    <option value="đang giao hàng">Đang giao hàng</option>
                                    <option value="đã giao hàng" selected>Đã giao hàng</option>
                                    <option value="đã hủy đơn hàng">Đã hủy đơn hàng</option>
                                    @endif
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" class="btn btn-primary" align="center">Xác nhận</button></td>
                        </tr>
                    </form>
                </tbody>
            </table>



            @endisset
        </div>
    </div>

    <!-- <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table> -->

</div>
</div>
<!-- /#page-content-wrapper -->
@endsection