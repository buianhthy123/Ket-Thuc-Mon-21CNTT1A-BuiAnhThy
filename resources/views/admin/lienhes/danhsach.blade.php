@extends('admin.layouts.master')
  @section('content')

  <!--/Nav-->
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

          <div class="">

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#" data-toggle="modal" data-target="#log-out">Đăng xuất <span class="log-out"></i></span></a>
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
      <div class="show-page " style="margin-left: 50px;">

          Tìm kiếm <span> <input id="myInput" style="padding-left: 15px; border: 0.5px solid grey;" type="text" placeholder="Search.."></span>

      </div>
    <div>
        @if(session('success'))
            <br>
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-hover table-text-center">
            <thead  class="thead-light">
            <tr>
                <th  scope="col">STT</th>
                <th  scope="col">Tên người liên hệ</th>
                <th  scope="col">Số ĐT</th>
                <th  scope="col">Nội dung liên hệ</th>
                <th colspan='2'  scope="col"> <center>Cài đặt</center></th>
            </tr>
            </thead>
            <tbody id="content-table">
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
