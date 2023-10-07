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
      <div class="border mb-2">


              @if(session('success'))
              <br>
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
              @endif

              <div class="row">
              <div class="show-page ">
                  <a href="{{route('admin.getCateAdd')}}">
                      <button type="button" class="btn btn-outline-primary">Thêm mới</button>
                  </a>
              </div>

              <table class="table table-hover table-text-center">
                  <thead class="thead-light">
                      <tr>
                          <th scope="col">STT</th>
                          <th scope="col">Tên sản phẩm</th>
                          <th scope="col">Loại sản phẩm</th>
                          <th scope="col">Giá gốc</th>
                          <th scope="col">Giá giảm</th>
                          <th scope="col">Hình ảnh</th>
                          <th scope="col">Đơn vị</th>
                          <th scope="col">Mô Tả</th>
                          <th scope="col" colspan='2'>
                              <center>Cài đặt</center>
                          </th>
                      </tr>
                  </thead>
                  <tbody id="content-table">
                      @isset($sanphams)
                      @php
                      $i=1;
                      @endphp
                      @foreach($sanphams as $sanpham)
                      <tr>
                          <td>{{$i}}</td>
                          <td>{{$sanpham->name}}</td>
                          <td>{{$sanpham->Loaisp->name}}</td>
                          <td>{{$sanpham->giatien}}</td>
                          <td>{{$sanpham->giamgia}}</td>
                          <td><img src="{{ asset('/source/image/sanpham/'.$sanpham->image) }}" alt="" width="100px" height="50px" /></td>
                          <td>{{$sanpham->donvi}}</td>
                          <td>
                              {{$sanpham->mota}}
                          <td>
                              <a href="{{route('admin.getCateEdit',[$sanpham->id])}}"><button class="btn btn-outline-primary"><i class="fas fa-cog  fa-lg"></i></button></a>
                          </td>
                          <td>
                              <form action="{{route('admin.getCateDelete',[$sanpham->id])}}" method="post">
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

      </div>
      <div class="page-navigation">
          <div class="beta"> <button onclick="previous_page()"> Trước</button>
              <span id="page-number">

              </span>
              <button onclick="next_page()"> Sau</button>
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