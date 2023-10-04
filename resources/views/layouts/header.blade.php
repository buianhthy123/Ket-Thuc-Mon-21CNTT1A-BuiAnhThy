<header class="header_other">
    <div class="topbar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-5 hidden-xs">
                    <div class="topbar_left">
                        <ul>
                            <li>
                                <span class="welcome_text">Chào mừng bạn đến với AT08 COFFEE</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-7 d-list col-xs-12 a-right topbar_right hidden-xs">
                    <ul>
                        @if(Auth::check())
                            @php
                            $user = Auth::user();
                            @endphp
                            <li><a href="{{route('getAccount')}}"><i class="fa fa-user"></i>{{ $user->name }}</a></li>
                        @else
                            <li><a href="{{route('getAccount')}}"><i class="fa fa-user"></i>Tài khoản</a></li>
                        @endif
                        <li><a href="{{route('getSignin')}}">Đăng kí</a></li>
                        @if(Auth::check())
                            <li><a href="{{route('admin.getLogout')}}">Đăng xuất</a></li>
                        @else
                            <li><a href="{{ route('admin.getLogin') }}">Đăng nhập</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mid-header wid_100">
        <div class="container">
            <div class="row">
                <div class="content_header">
                    <div class="header-main">
                        <div class="wrap_main">
                            <div class="container">
                                <div class="row row-noGutter">
                                    <nav class="header-nav">
                                        <!-- Left Menu -->
                                        <ul id="left-menu" class="item_big nav-left hidden-xs hidden-sm menu">
                                            <li id="menu-item-161" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-161 nav-item "><a href="{{route('trangchu.trangchu')}}">Trang chủ</a></li>
                                            <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164 nav-item "><a href="https://at08.mediawz.com/gioi-thieu/">Giới thiệu</a></li>
                                            <li id="menu-item-166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164 nav-item"><a href="{{route('getLoaisp')}}">Sản phẩm</a></li>
                                        </ul>
                                        <!-- Logo Menu -->
                                        <ul class="logo_center">
                                            <li class="logo">
                                                <a href="https://at08.mediawz.com" class="logo-wrapper ">
                                                    <img src="https://at08.mediawz.com/wp-content/uploads/2021/06/AT08.png" alt="AT08 COFFEE">
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Right Menu -->
                                        <ul id="right-menu" class="item_big nav-right hidden-xs hidden-sm menu">
                                            <li id="menu-item-172" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-172 nav-item "><a href="https://at08.mediawz.com/chuyen-muc/dich-vu/">Dịch vụ</a></li>
                                            <li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170 nav-item "><a href="https://at08.mediawz.com/tin-tuc/">Tin tức</a></li>
                                            <li id="menu-item-169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-169 nav-item "><a href="{{route('getInputLienhe')}}">Liên hệ</a></li>
                                        </ul>
                                        <!-- Cartgroup -->
                                        <div class="cartgroup">
                                            <div class="searchion inline-b">
                                                <span class="visible_index nn"><i class="fas fa-search"></i></span>
                                                <div class="searchmini">
                                                    <form role="search" method="get" class="input-group search-bar" action="https://at08.mediawz.com/">
                                                        <input type="text" id="" class="button_gradient input-group-field auto-search visible_index" placeholder="Tìm kiếm &hellip;" value="" name="s" />
                                                        <button type="submit" class="visible_index btn icon-fallback-text">
                                                            <span class="fas fa-search"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <span class="xo">|</span>
                                            <div class="header-right inline-block">
                                                <div class="top-cart-contain f-right">
                                                    <div class="mini-cart text-xs-center">
                                                        <div class="heading-cart cart_header">
                                                            <a class="img_hover_cart" href="{{route('cart')}}" title="Giỏ hàng">
                                                                <div class="icon_hotline visible_index">
                                                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                                    <span class="count_item count_item_pr button_gradient">@if(Session::has('cart')){{Session('cart')->totalQty}}
                                                                            @else 0 @endif</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="top-cart-contain f-right hidden">
                                                    <div class="mini-cart text-xs-center">
                                                        <div class="heading-cart">
                                                            <a class="bg_cart" href="{{route('cart')}}" title="Giỏ hàng">
                                                                <i class="ion-android-cart"></i>
                                                                <span class="count_item count_item_pr">11214</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="site-main-hl">
    <div class="breadcrumb_nobackground margin-bottom-40"></div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="woocommerce-notices-wrapper"></div>
            <div id="product-206" class="product type-product post-206 status-publish first instock product_cat-ca-phe-cam-hung product_cat-ca-phe-pha-viet product_cat-ca-phe-the-gioi product_cat-do-uong has-post-thumbnail shipping-taxable purchasable product-type-simple">
                <!-- Your product content here -->
            </div>
        </main>
    </div>
</section>
