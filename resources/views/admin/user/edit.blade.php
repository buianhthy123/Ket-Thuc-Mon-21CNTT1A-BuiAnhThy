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
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#log-out">Đăng xuất <span class="log-out"></span></a>
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
      <div class="container">
        <h1>Edit Users</h1>

        <form action="{{ route('admin.postUserEdit',$user[0]->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <label for="">Full name</label>
          <input type="text" name="name" id="" value="{{isset($user[0]->name)?$user[0]->name:''}}" class="form-control" placeholder="" aria-describedby="helpId">
          <label for="">Email</label>
          <input type="text" name="email" id="" value="{{isset($user[0]->email)?$user[0]->email:''}}" class="form-control" placeholder="" aria-describedby="helpId">
          <label for="">Password</label>
          <input type="text" name="password" id="" value="{{isset($user[0]->password)?$user[0]->password:''}}" class="form-control" placeholder="" aria-describedby="helpId">      
          <label for="">Level</label>
          <input type="text" name="level" id="" value="{{isset($user[0]->level)?$user[0]->level:''}}" class="form-control" placeholder="" aria-describedby="helpId">
          

          </br></br><input name="editBtn" id="" class="btn btn-primary" type="submit" value="Sửa">
        </form>
      </div>
@endsection