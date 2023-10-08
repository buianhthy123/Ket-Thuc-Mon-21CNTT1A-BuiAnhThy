

    <!--Nav-->
    <div class="side-bar bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-center"></div>
      <div class="profile">
        <div class="profile-pic">
          <img src="images/admin.jpg" alt="">
        </div>
        <div class="profile-info">
          <span>Welcome</span>
          <h5>Administrator</h5>
        </div>
      </div>
      <div class="list-group list-group-flush">
        <ul>
          <li>
            <a href="{{ route('admin.getCateList') }}" class="list-group-item list-group-item-action"> Quản lý sản phẩm </a>
          </li>
          <li>
            <a href="{{ route('admin.getCustomersList') }}" class="list-group-item list-group-item-action   ">
            Quản lý Customers</a>
          </li>
          <li>
            <a href="{{ route('admin.getLoaispList') }}" class="list-group-item list-group-item-action  "> Quản lý Loại sp
              </a>
          </li>
          <li>
            <a href="{{ route('admin.getUserList') }}" class="list-group-item list-group-item-action "> Quản lý User</a>
          </li>
          <li>
            <a href="{{ route('admin.getNhaccList') }}" class="list-group-item list-group-item-action "> Quản lý Nhà Cung Cấp</a>
          </li>
          <li>
            <a  href="{{ route('admin.getLienheList') }}" class="list-group-item list-group-item-action"> Quản lý Liên Hệ </a>
          </li>
          <li>
            <a href="{{ route('admin.listBillAll') }}" class="list-group-item list-group-item-action"> Quản lý bill  </a>
          </li>
          <!-- <li>
            <a href="admin-filter.html" class="list-group-item list-group-item-action "> Dữ liệu lọc <i
                class="menu-icon fas fa-filter"></i></a>
          </li> -->
        </ul>
      </div>
    </div>
    