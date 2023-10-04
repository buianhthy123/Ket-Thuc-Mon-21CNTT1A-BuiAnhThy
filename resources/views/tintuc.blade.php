@extends('layouts.master')

@section('content')

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
				<div class="list-inline f-right">
					<ul class="ul-account">
												
						<li class="hidden-xs">
							<a href="https://at08.mediawz.com/tai-khoan/" title="Đăng ký" class="account_a a_db">
								<span>Đăng ký</span>
							</a>
						</li>
						<li class="line_ hidden-xs">/</li>
						<li class="hidden-xs">
							<a href="https://at08.mediawz.com/tai-khoan/" title="Đăng nhập" class="account_a a_db">
								<span>Đăng nhập</span>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>        <div class="mid-header wid_100">
    <div class="container">
        <div class="row">
            <div class="content_header">
                <div class="header-main">
                    <div class="wrap_main">
                        <div class="container">
                            <div class="row row-noGutter">
                            	<nav class="header-nav">
                                	<!-- Left Menu -->
                                    <ul id="left-menu" class="item_big nav-left hidden-xs hidden-sm menu"><li id="menu-item-161" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-161 nav-item "><a href="https://at08.mediawz.com/">Trang chủ</a></li>
<li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164 nav-item "><a href="https://at08.mediawz.com/gioi-thieu/">Giới thiệu</a></li>
<li id="menu-item-166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-166 nav-item "><a href="https://at08.mediawz.com/san-pham/">Sản phẩm</a>
<ul/ class="sub-menu item_small hidden-sm hidden-xs" />
	<li id="menu-item-181" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-181 nav-item "><a href="https://at08.mediawz.com/danh-muc-san-pham/ca-phe-the-gioi/">Cà phê thế giới</a></li>
	<li id="menu-item-180" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-180 nav-item "><a href="https://at08.mediawz.com/danh-muc-san-pham/ca-phe-pha-viet/">Cà phê pha Việt</a></li>
	<li id="menu-item-179" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-179 nav-item "><a href="https://at08.mediawz.com/danh-muc-san-pham/ca-phe-cam-hung/">Cà phê cảm hứng</a></li>
	<li id="menu-item-182" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-182 nav-item "><a href="https://at08.mediawz.com/danh-muc-san-pham/do-uong/">Đồ uống</a></li>
</ul>
</li>
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
                                    <ul id="right-menu" class="item_big nav-right hidden-xs hidden-sm menu"><li id="menu-item-172" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-172 nav-item "><a href="https://at08.mediawz.com/chuyen-muc/dich-vu/">Dịch vụ</a></li>
<li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6 current_page_item current_page_parent menu-item-170 nav-item "><a href="https://at08.mediawz.com/tin-tuc/" aria-current="page">Tin tức</a></li>
<li id="menu-item-169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-169 nav-item "><a href="https://at08.mediawz.com/lien-he/">Liên hệ</a></li>
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
                    <a class="img_hover_cart" href="https://at08.mediawz.com/gio-hang/" title="Giỏ hàng">
                        <div class="icon_hotline visible_index">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span class="count_item count_item_pr button_gradient">0</span>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="top-cart-contain f-right hidden">
            <div class="mini-cart text-xs-center">
                <div class="heading-cart">
                    <a class="bg_cart" href="https://at08.mediawz.com/gio-hang/" title="Giỏ hàng">
                        <i class="ion-android-cart"></i>
                        <span class="count_item count_item_pr">0</span>
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
</div>        <div class="menu_search_mobi hidden-md hidden-lg">
    <div class="menu-bar-h nav-mobile-button hidden-md hidden-lg">
      <i class="fas fa-bars"></i>
    </div>
	
    <div class="searchboxlager hidden-lg">
      <div class="searchfromtop">
        <form role="search" method="get" action="https://at08.mediawz.com/">
            <input type="search" class="hidden-md st-default-search-input search-text" placeholder="Tìm kiếm &hellip;" value="" name="s" />
            <input type="hidden" name="post_type" value="product"> 
        </form>
      </div>
    </div>
  </div>    </header>
    	<section id="site-main-hl">
    	<div class="breadcrumb_nobackground margin-bottom-40">
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
        	<p id="breadcrumbs" class="breadcrumb"><span><span><a href="http://at08.wiza.vn/">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Tin tức</span></span></span></p>    
        </div>
    </section>    
</div>
<div class="blog_page_section" itemscope="" itemtype="https://schema.org/Blog">
	<div class="list-blogs blog-main">
    	    	<div class="rows">
        	<div class="bg_2blog">
            	<div class="container margin-bottom-50 class_db">
                	<div class="row">
                    	<div class="col-lg-12">
                        	<div class="heading margin-top-30 margin-bottom-40 f-left w_100">
								<h1 class="a-center">Tin tức</h1>
							</div>
                            
                            <div class="blog_width_wrap blogmain f-left w_100 row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="blog_item">
	<div class="blog-inner">
		<div class="blog-img thumb_horizontal a-center">
			<a class="img_item_blog" href="https://at08.mediawz.com/gia-ca-phe-the-gioi-dao-chieu-trong-thang-2/">
				<img width="480" height="480" src="https://at08.mediawz.com/wp-content/uploads/2020/06/g7.jpg" class="attachment-thumb_480x480 size-thumb_480x480 wp-post-image" alt="Giá cà phê thế giới đảo chiều trong tháng 2" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/g7.jpg 480w, https://at08.mediawz.com/wp-content/uploads/2020/06/g7-300x300.jpg 300w, https://at08.mediawz.com/wp-content/uploads/2020/06/g7-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/g7-100x100.jpg 100w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />			</a>
			<div class="content_blog_full content_horizontal">
				<span class="short_time">
					<i class="fas fa-calendar-alt"></i>  08/06/2020				</span>
				<h3><a title="Giá cà phê thế giới đảo chiều trong tháng 2" href="https://at08.mediawz.com/gia-ca-phe-the-gioi-dao-chieu-trong-thang-2/">Giá cà phê thế giới đảo chiều trong tháng 2</a></h3>   
			</div>
		</div>
	</div>
</div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="blog_item">
	<div class="blog-inner">
		<div class="blog-img thumb_horizontal a-center">
			<a class="img_item_blog" href="https://at08.mediawz.com/ca-phe-dang-dung-truoc-nguy-co-tuyet-chung/">
				<img width="480" height="480" src="https://at08.mediawz.com/wp-content/uploads/2020/06/g6.jpg" class="attachment-thumb_480x480 size-thumb_480x480 wp-post-image" alt="Cà phê đang đứng trước nguy cơ&#8230;tuyệt chủng?" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/g6.jpg 480w, https://at08.mediawz.com/wp-content/uploads/2020/06/g6-300x300.jpg 300w, https://at08.mediawz.com/wp-content/uploads/2020/06/g6-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/g6-100x100.jpg 100w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />			</a>
			<div class="content_blog_full content_horizontal">
				<span class="short_time">
					<i class="fas fa-calendar-alt"></i>  08/06/2020				</span>
				<h3><a title="Cà phê đang đứng trước nguy cơ&#8230;tuyệt chủng?" href="https://at08.mediawz.com/ca-phe-dang-dung-truoc-nguy-co-tuyet-chung/">Cà phê đang đứng trước nguy cơ&#8230;tuyệt chủng?</a></h3>   
			</div>
		</div>
	</div>
</div></div>                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
            	<div class="wrap_list_vertical margin-top-50">
                	<div class="row">
                    	<div class="content-blog-index blog_left col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="blog_index">
	<div class="myblog">
		<div class="image-blog-left a-center">
			<a class="img_bot" href="https://at08.mediawz.com/59-nguoi-truong-thanh-o-my-tieu-thu-ca-phe-dac-san/">
				 <img width="480" height="480" src="https://at08.mediawz.com/wp-content/uploads/2020/06/g1.jpg" class="attachment-thumb_480x480 size-thumb_480x480 wp-post-image" alt="59% người trưởng thành ở Mỹ tiêu thụ cà phê đặc sản" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/g1.jpg 1110w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-300x300.jpg 300w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-1024x1024.jpg 1024w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-768x768.jpg 768w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-100x100.jpg 100w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-600x600.jpg 600w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />			</a>
		</div>	
		<div class="content_blog">
			<div class="content_right">
				<span class="short_time">
					<i class="fas fa-calendar-alt"></i>  08/06/2020				</span>
				<h3>
					<a href="https://at08.mediawz.com/59-nguoi-truong-thanh-o-my-tieu-thu-ca-phe-dac-san/" title="59% người trưởng thành ở Mỹ tiêu thụ cà phê đặc sản">59% người trưởng thành ở Mỹ tiêu thụ cà phê đặc sản</a>
				</h3>
			</div>
			<div class="summary_item_blog">
				<p>Các chuyên gia dự đoán thâm hụt toàn cầu một triệu bao loại 60 kg trong niên vụ 2019 - 2020, trong khi ước tính thặng dư là 4,25 triệu</p>
			</div>
		</div>
	</div>
</div></div><div class="content-blog-index blog_left col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="blog_index">
	<div class="myblog">
		<div class="image-blog-left a-center">
			<a class="img_bot" href="https://at08.mediawz.com/dak-nong-trong-xen-canh-cuu-ca-phe-trong-bien-doi-khi-hau/">
				 <img width="480" height="480" src="https://at08.mediawz.com/wp-content/uploads/2020/06/g4.jpg" class="attachment-thumb_480x480 size-thumb_480x480 wp-post-image" alt="Đắk Nông: Trồng xen canh &#8216;cứu&#8217; cà phê trong biến đổi khí hậu" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/g4.jpg 780w, https://at08.mediawz.com/wp-content/uploads/2020/06/g4-300x300.jpg 300w, https://at08.mediawz.com/wp-content/uploads/2020/06/g4-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/g4-768x768.jpg 768w, https://at08.mediawz.com/wp-content/uploads/2020/06/g4-100x100.jpg 100w, https://at08.mediawz.com/wp-content/uploads/2020/06/g4-600x600.jpg 600w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />			</a>
		</div>	
		<div class="content_blog">
			<div class="content_right">
				<span class="short_time">
					<i class="fas fa-calendar-alt"></i>  08/06/2020				</span>
				<h3>
					<a href="https://at08.mediawz.com/dak-nong-trong-xen-canh-cuu-ca-phe-trong-bien-doi-khi-hau/" title="Đắk Nông: Trồng xen canh &#8216;cứu&#8217; cà phê trong biến đổi khí hậu">Đắk Nông: Trồng xen canh &#8216;cứu&#8217; cà phê trong biến đổi khí hậu</a>
				</h3>
			</div>
			<div class="summary_item_blog">
				<p>Các chuyên gia dự đoán thâm hụt toàn cầu một triệu bao loại 60 kg trong niên vụ 2019 - 2020, trong khi ước tính thặng dư là 4,25 triệu</p>
			</div>
		</div>
	</div>
</div></div><div class="content-blog-index blog_left col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="blog_index">
	<div class="myblog">
		<div class="image-blog-left a-center">
			<a class="img_bot" href="https://at08.mediawz.com/gia-ca-phe-arabica-nam-2019-du-kien-tang-tai-brazil-thap/">
				 <img width="480" height="480" src="https://at08.mediawz.com/wp-content/uploads/2020/06/g2.jpg" class="attachment-thumb_480x480 size-thumb_480x480 wp-post-image" alt="Giá cà phê arabica năm 2019 dự kiến tăng tại Brazil thấp" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/g2.jpg 780w, https://at08.mediawz.com/wp-content/uploads/2020/06/g2-300x300.jpg 300w, https://at08.mediawz.com/wp-content/uploads/2020/06/g2-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/g2-768x768.jpg 768w, https://at08.mediawz.com/wp-content/uploads/2020/06/g2-100x100.jpg 100w, https://at08.mediawz.com/wp-content/uploads/2020/06/g2-600x600.jpg 600w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />			</a>
		</div>	
		<div class="content_blog">
			<div class="content_right">
				<span class="short_time">
					<i class="fas fa-calendar-alt"></i>  06/06/2020				</span>
				<h3>
					<a href="https://at08.mediawz.com/gia-ca-phe-arabica-nam-2019-du-kien-tang-tai-brazil-thap/" title="Giá cà phê arabica năm 2019 dự kiến tăng tại Brazil thấp">Giá cà phê arabica năm 2019 dự kiến tăng tại Brazil thấp</a>
				</h3>
			</div>
			<div class="summary_item_blog">
				<p>Các chuyên gia dự đoán thâm hụt toàn cầu một triệu bao loại 60 kg trong niên vụ 2019 - 2020, trong khi ước tính thặng dư là 4,25 triệu</p>
			</div>
		</div>
	</div>
</div></div><div class="content-blog-index blog_left col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="blog_index">
	<div class="myblog">
		<div class="image-blog-left a-center">
			<a class="img_bot" href="https://at08.mediawz.com/bloomberg-xuat-khau-ca-phe-lon-thu-hai-viet-nam/">
				 <img width="480" height="480" src="https://at08.mediawz.com/wp-content/uploads/2020/06/g1.jpg" class="attachment-thumb_480x480 size-thumb_480x480 wp-post-image" alt="Bloomberg: Xuất khẩu cà phê lớn thứ hai Việt Nam" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/g1.jpg 1110w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-300x300.jpg 300w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-1024x1024.jpg 1024w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-768x768.jpg 768w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-100x100.jpg 100w, https://at08.mediawz.com/wp-content/uploads/2020/06/g1-600x600.jpg 600w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />			</a>
		</div>	
		<div class="content_blog">
			<div class="content_right">
				<span class="short_time">
					<i class="fas fa-calendar-alt"></i>  06/06/2020				</span>
				<h3>
					<a href="https://at08.mediawz.com/bloomberg-xuat-khau-ca-phe-lon-thu-hai-viet-nam/" title="Bloomberg: Xuất khẩu cà phê lớn thứ hai Việt Nam">Bloomberg: Xuất khẩu cà phê lớn thứ hai Việt Nam</a>
				</h3>
			</div>
			<div class="summary_item_blog">
				<p>Tình trạng biến đổi khí hậu đang trở thành vấn đề nan giải, ngày càng ảnh hưởng rõ nét và sâu sắc đến sản xuất nông nghiệp, đặc biệt tác</p>
			</div>
		</div>
	</div>
</div></div>                    </div>
                </div>
                
                 <section class="section-pagination">
					                </section>
            </div>
        </div>
        
       
        
            </div>
</div><!-- .wrap -->

	</section><!-- #site-main-hl -->
    
  @endsection