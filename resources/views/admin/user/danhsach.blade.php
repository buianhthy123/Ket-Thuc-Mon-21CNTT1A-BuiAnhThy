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
                              <form method="GET" action="{{route('admin.getLogout')}}">
                                @csrf
                                <button type="submit" class="btn btn-primary">Đăng xuất</button>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </nav>
      <div class="show-page " style="margin-left: 50px;">

          Tìm kiếm <span> <input id="myInput" style="padding-left: 15px; border: 0.5px solid grey;" type="text" placeholder="Search.."></span>

      </div>

  <body>
  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
      <table class="table table-hover table-text-center">
        <tbody id="content-table">
            <tr> 
            <th>STT</th>
            <th>Full name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Level</th>
            <th colspan="2">button</th>
            </tr>
            @isset($users)
            @php
            $i=1;
            @endphp
            @foreach ($users as $user)
            <tr>
            <td scope="row">{{$i;}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->level}}</td>
            <td><a href="{{route('admin.getUserEdit',$user->id)}}" class="btn btn-outline-secondary" role="button"><i class="fas fa-cog fa-spin fa-lg"></i></a></td>
            <form action="{{route('admin.getUserDelete',$user->id)}}" method="post">
            @csrf
            @method('delete')
            <td><button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
            </td></form>
            </tr>
            @php
            $i+=1;
            @endphp
            @endforeach
            @endisset
        </tbody>
      </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    @endsection