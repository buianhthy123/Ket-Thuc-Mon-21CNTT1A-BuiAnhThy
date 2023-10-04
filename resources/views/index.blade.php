@extends('layouts.master')

@section('content')
<div class="home-slide">
    <div id="metaslider-id-108" style="width: 100%;" class="ml-slider-3-16-4 metaslider metaslider-flex metaslider-108 ml-slider">
        <div id="metaslider_container_108">
            <div id="metaslider_108">
                <ul aria-live="polite" class="slides">
                    <li style="display: block; width: 100%;" class="slide-186 ms-image"><img src="https://at08.mediawz.com/wp-content/uploads/2020/06/slider_2-1-1920x757.jpg" height="757" width="1920" alt="" class="slider-108 slide-186" title="slider_2" /></li>
                    <li style="display: none; width: 100%;" class="slide-187 ms-image"><img src="https://at08.mediawz.com/wp-content/uploads/2020/06/slider_2-1-1920x757.jpg" height="757" width="1920" alt="" class="slider-108 slide-187" title="slider_2" /></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<section id="site-main-hl">

    <div id="primary" class="content-area">
        <article id="post-2" class="twentyseventeen-panel  post-2 page type-page status-publish hentry">
            <section id="home_about-2" class="widget home_about">
                <div class="section_about">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="module_left a-center">
                                    <div class="heading">
                                        <h2 class="large_title">Chúng tôi là</h2>
                                        <span class="mini_title">AT08 Coffee</span>
                                    </div>
                                    <div class="day_time">
                                        Thứ hai đến Thứ bảy <b>8:30am - 11:00pm</b> <span class="hidden-xs">|</span>
                                        Hotline:
                                        <a href="tel:0123.456.789">0123.456.789</a>
                                    </div>
                                    <span>
                                        <p>Chúng tôi đi khắp thế giới để tìm kiếm cà phê tuyệt vời. Trong quá trình đó, chúng tôi phát hiện ra những hạt đậu đặc biệt và hiếm đến nỗi chúng tôi có thể chờ đợi để mang chúng về.</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="module_right a-center">
                                    <img src="https://at08.mediawz.com/wp-content/uploads/2020/06/bg_about.png" alt="Chúng tôi là">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="home_wooc_categories_sortable-3" class="widget home_wooc_categories_sortable">
                <section class="section_menu_today">
                    <div class="container">
                        <div class="row">
                            <div class="heading">
                                <h2 class="large_title">MENU HÔM NAY</h2>
                                <span class="mini_title">Xem menu hôm nay</span>
                            </div>
                        </div>
                    </div>

                    <div class="tab_link_module">
                        <div class="tabs-container tab_border">
                            <span class="hidden-md hidden-lg button_show_tab">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </span>
                            <span class="hidden-md hidden-lg title_check_tabs"></span>
                            <div class="clearfix">
                                <ul class="ul_link link_tab_check_click container">
                                    <li class="li_tab">
                                        <a href="#content-tabb-65" class="active head-tabs head-tab65" data-src=".head-tab65">Cà phê Mới</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tabs-content container">

                            <div id="content-tabb-65" class="content-tab content-tab-proindex" style="">
                                <div class="woocommerce columns-4 ">
                                    <section class="clearfix wrap_item_list row products columns-4">

                                    @foreach ($sanphams as $sanpham)
                                        @if ( $sanpham->new == 1)
                                        <div class="clear_ col-xs-12 col-sm-12 col-md-6 col-lg-6 product type-product post-206 status-publish first instock product_cat-ca-phe-cam-hung product_cat-ca-phe-pha-viet product_cat-ca-phe-the-gioi product_cat-do-uong has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                            <div class="wrp_item_small">
                                                <div class="product-box product_grid_2">
                                                    <div class="product_mini_2 clearfix  ">
                                                        <div class="img_product">
                                                            <a class="product-img" href="{{ route('show', ['id' => $sanpham->id]) }}" title="Cà phê Americano">
                                                                <img width="150" height="150" src="/source/image/sanpham/{{$sanpham->image}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Cà phê Americano" sizes="100vw" />
                                                            </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="infor_prd">
                                                                <h3 class="name_product">
                                                                    <a href="{{ route('show', ['id' => $sanpham->id]) }}" title="Cà phê Americano" class="product-name">
                                                                        <span class="name_product">{{$sanpham->name}}</span>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                            <div class="price_base ">
                                                                <div class="price-box clearfix">
                                                                    <div class="special-price"> <span class="price product-price"><span class="woocommerce-Price-amount amount">{{$sanpham->giatien}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span> </div>
                                                                </div>
                                                            </div>
                                                            <div class="summary_grid">
                                                                <div class="rte description text2line">
                                                                    {{$sanpham->mota}}
                                                                </div>
                                                                <!-- Đoạn giao diện giỏ hàng -->
                                                                <div class="add-to-cart-button">
                                                                    <a href="{{route('banhang.addToCart', $sanpham->id)}}" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                    @endforeach

                                       


                                </div>
                            </div>
                        </div>
                </section>
            </section>
            <section id="home_gallery-2" class="widget home_gallery">
                <div id="hinhanh" class="st section_gallery">
                    <div class="container">
                        <div class="row">
                            <div class="heading">
                                <h2>Hình ảnh quán cafe</h2>
                            </div>

                            <div class="gallery_content">
                                <div class="blog-list blog-image-list">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="al-item">
                                            <img src="https://at08.mediawz.com/wp-content/uploads/2020/06/g5.jpg" alt="Thư viện ảnh">
                                            <a href="https://at08.mediawz.com/wp-content/uploads/2020/06/g5.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content_right">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-bottom-30 item">
                                                <div class="al-item al-item-min">
                                                    <img src="https://at08.mediawz.com/wp-content/uploads/2020/06/g4.jpg" alt="AT08 COFFEE1">
                                                    <a href="https://at08.mediawz.com/wp-content/uploads/2020/06/g4.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-bottom-30 item">
                                                <div class="al-item al-item-min">
                                                    <img src="https://at08.mediawz.com/wp-content/uploads/2020/06/g3.jpg" alt="AT08 COFFEE2">
                                                    <a href="https://at08.mediawz.com/wp-content/uploads/2020/06/g3.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-bottom-30 item">
                                                <div class="al-item al-item-min">
                                                    <img src="https://at08.mediawz.com/wp-content/uploads/2020/06/g2.jpg" alt="AT08 COFFEE3">
                                                    <a href="https://at08.mediawz.com/wp-content/uploads/2020/06/g2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-bottom-30 item">
                                                <div class="al-item al-item-min">
                                                    <img src="https://at08.mediawz.com/wp-content/uploads/2020/06/g1.jpg" alt="AT08 COFFEE4">
                                                    <a href="https://at08.mediawz.com/wp-content/uploads/2020/06/g1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="home_clients-2" class="widget home_clients">
                <section class="section_feedback">
                    <div class="container">
                        <div class="row">
                            <div class="heading">
                                <h2>Khách hàng nói gì</h2>
                            </div>

                            <div id="sync2" class="thumb_side owl-carousel owl-theme not-aweowl">
                                <div class="item thumb_small">
                                    <a href="javascript:;" class="clearfix">
                                        <img width="100" height="100" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_5.jpg" class="attachment- size- wp-post-image" alt="Mrs. Thùy Chi" sizes="100vw" /> </a>
                                </div>
                                <div class="item thumb_small">
                                    <a href="javascript:;" class="clearfix">
                                        <img width="100" height="100" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_4.jpg" class="attachment- size- wp-post-image" alt="Mrs. Bảo Thy" sizes="100vw" /> </a>
                                </div>
                                <div class="item thumb_small">
                                    <a href="javascript:;" class="clearfix">
                                        <img width="100" height="100" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_3.jpg" class="attachment- size- wp-post-image" alt="Mrs. Thảo Tâm" sizes="100vw" /> </a>
                                </div>
                                <div class="item thumb_small">
                                    <a href="javascript:;" class="clearfix">
                                        <img width="100" height="100" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_2.jpg" class="attachment- size- wp-post-image" alt="Mrs. Hương Tràm" sizes="100vw" /> </a>
                                </div>
                                <div class="item thumb_small">
                                    <a href="javascript:;" class="clearfix">
                                        <img width="160" height="160" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_1.jpg" class="attachment- size- wp-post-image" alt="Mrs. Phương Linh" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_1.jpg 160w, https://at08.mediawz.com/wp-content/uploads/2020/06/cust_1-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/cust_1-100x100.jpg 100w" sizes="100vw" /> </a>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="sync1" class="owl_danhgia owl-carousel not-aweowl">
                                    <div class="item">
                                        <div class="row">
                                            <div class="image_thumb_bb col-lg-12">
                                                <a href="javascript:;" class="img_large clearfix">
                                                    <img width="100" height="100" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_5.jpg" class="attachment- size- wp-post-image" alt="Mrs. Thùy Chi" sizes="100vw" /> </a>
                                            </div>
                                            <div class="content_thumb_bb col-lg-12">
                                                <div class="content_danhgia">
                                                    <span>Mrs. Thùy Chi</span>
                                                    <p>Tôi rất hài lòng về thái độ phục vụ của quán, cafe đa dạng, bánh ngon và không gian rất đẹp, mình thích sống ảo nên tại đây mình có thể chụp được những tấm ảnh đẹp cùng bạn bè, để hẹn hò cũng rất lãng mạn .<br />
                                                        Giá cả cũng hợp lý và rẻ lắm đó ạ, để hẹn hò cũng rất lãng mạn</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="image_thumb_bb col-lg-12">
                                                <a href="javascript:;" class="img_large clearfix">
                                                    <img width="100" height="100" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_4.jpg" class="attachment- size- wp-post-image" alt="Mrs. Bảo Thy" sizes="100vw" /> </a>
                                            </div>
                                            <div class="content_thumb_bb col-lg-12">
                                                <div class="content_danhgia">
                                                    <span>Mrs. Bảo Thy</span>
                                                    <p>Tôi rất hài lòng về thái độ phục vụ của quán, cafe đa dạng, bánh ngon và không gian rất đẹp, mình thích sống ảo nên tại đây mình có thể chụp được những tấm ảnh đẹp cùng bạn bè, để hẹn hò cũng rất lãng mạn .<br />
                                                        Giá cả cũng hợp lý và rẻ lắm đó ạ, để hẹn hò cũng rất lãng mạn</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="image_thumb_bb col-lg-12">
                                                <a href="javascript:;" class="img_large clearfix">
                                                    <img width="100" height="100" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_3.jpg" class="attachment- size- wp-post-image" alt="Mrs. Thảo Tâm" sizes="100vw" /> </a>
                                            </div>
                                            <div class="content_thumb_bb col-lg-12">
                                                <div class="content_danhgia">
                                                    <span>Mrs. Thảo Tâm</span>
                                                    <p>Tôi rất hài lòng về thái độ phục vụ của quán, cafe đa dạng, bánh ngon và không gian rất đẹp, mình thích sống ảo nên tại đây mình có thể chụp được những tấm ảnh đẹp cùng bạn bè, để hẹn hò cũng rất lãng mạn .<br />
                                                        Giá cả cũng hợp lý và rẻ lắm đó ạ, để hẹn hò cũng rất lãng mạn</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="image_thumb_bb col-lg-12">
                                                <a href="javascript:;" class="img_large clearfix">
                                                    <img width="100" height="100" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_2.jpg" class="attachment- size- wp-post-image" alt="Mrs. Hương Tràm" sizes="100vw" /> </a>
                                            </div>
                                            <div class="content_thumb_bb col-lg-12">
                                                <div class="content_danhgia">
                                                    <span>Mrs. Hương Tràm</span>
                                                    <p>Tôi rất hài lòng về thái độ phục vụ của quán, cafe đa dạng, bánh ngon và không gian rất đẹp, mình thích sống ảo nên tại đây mình có thể chụp được những tấm ảnh đẹp cùng bạn bè, để hẹn hò cũng rất lãng mạn .<br />
                                                        Giá cả cũng hợp lý và rẻ lắm đó ạ, để hẹn hò cũng rất lãng mạn</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="image_thumb_bb col-lg-12">
                                                <a href="javascript:;" class="img_large clearfix">
                                                    <img width="160" height="160" src="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_1.jpg" class="attachment- size- wp-post-image" alt="Mrs. Phương Linh" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/cust_1.jpg 160w, https://at08.mediawz.com/wp-content/uploads/2020/06/cust_1-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/cust_1-100x100.jpg 100w" sizes="100vw" /> </a>
                                            </div>
                                            <div class="content_thumb_bb col-lg-12">
                                                <div class="content_danhgia">
                                                    <span>Mrs. Phương Linh</span>
                                                    <p>Tôi rất hài lòng về thái độ phục vụ của quán, cafe đa dạng, bánh ngon và không gian rất đẹp, mình thích sống ảo nên tại đây mình có thể chụp được những tấm ảnh đẹp cùng bạn bè, để hẹn hò cũng rất lãng mạn .<br />
                                                        Giá cả cũng hợp lý và rẻ lắm đó ạ, để hẹn hò cũng rất lãng mạn</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </section>
            <section id="home_contact-2" class="widget home_contact">
                <div class="section_hours_book form_contact_footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 content_left">
                                <div class="heading a-center">
                                    <h2>Giờ mở cửa</h2>
                                </div>
                                <div class="content_hour">
                                    <p class="option_1">Thứ 2 - Thứ 6 hàng tuần</p>
                                    <div class="t">
                                        <p>7am &#8211; 11am<br />
                                            11am &#8211; 10pm</p>
                                    </div>

                                    <p class="option_2">Thứ 7, Chủ nhật hàng tuần</p>
                                    <div class="t">
                                        <p>8am &#8211; 1 am<br />
                                            11am &#8211; 9pm</p>

                                    </div>
                                </div>
                                <div class="hotline_hour">
                                    <div class="sdt">Số điện thoại</div>
                                    <a href="tel:0123.456.789">0123.456.789</a>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 to_animate text-center animated fadeInUp">
                                <div class="heading a-center">
                                    <h2>Bạn có muốn đặt bàn ?</h2>
                                    <span class="padding-top-10">Gọi ngay cho chúng tôi để đặt bàn</span>
                                </div>
                                <div class="form-wrapper columns_margin_bottom_20  columns_padding_15">
                                    <div class="row">
                                        <div role="form" class="wpcf7" id="wpcf7-f160-p213-o1" lang="vi" dir="ltr">
                                            <div class="screen-reader-response" aria-live="polite"></div>
                                            <form action="/#wpcf7-f160-p213-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="160" />
                                                    <input type="hidden" name="_wpcf7_version" value="5.1.9" />
                                                    <input type="hidden" name="_wpcf7_locale" value="vi" />
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f160-p213-o1" />
                                                    <input type="hidden" name="_wpcf7_container_post" value="213" />
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 form-builder-item">
                                                    <fieldset class="form-group">
                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Tên của bạn" /></span><br />
                                                    </fieldset>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 form-builder-item">
                                                    <fieldset class="form-group">
                                                        <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" /></span><br />
                                                    </fieldset>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 form-builder-item">
                                                    <div class="form-group line-item-property__fields">
                                                        <div class="field-date input-groups">
                                                            <span class="wpcf7-form-control-wrap your-date"><input type="text" name="your-date" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="ngày/tháng/năm" /></span>
                                                        </div>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 form-builder-item">
                                                    <div class="form-group line-item-property__fields">
                                                        <div class="field-date input-groups">
                                                            <span class="wpcf7-form-control-wrap your-time"><input type="text" name="your-time" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="08h:30" /></span>
                                                        </div>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="wrap-forms wrap-forms-buttons margin-top-25 f-left w_100">
                                                    <div class="col-sm-12 wrap-buttons text-center">
                                                        <input type="submit" value="Gửi ngay cho chúng tôi" class="wpcf7-form-control wpcf7-submit theme_button wide_button color1 btn btn-primary" />
                                                    </div>
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section id="home_recent_post-2" class="widget home_recent_post">
                <div class="section_blog">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="a-center">
                                    <div class="heading">
                                        <h2 class="title-head">
                                            <a href="https://at08.mediawz.com/tin-tuc" title="Tin tức">Tin tức</a>
                                        </h2>
                                    </div>
                                </div>
                                <div class="wrap_list_vertical content-blog-index blog_left">
                                    <div class="wrap_owl_blog owl-carousel" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-loop="false" data-height="false" data-dot="false" data-nav="true">
                                        <div class="blog_index">
                                            <div class="myblog">
                                                <div class="image-blog-left a-center">
                                                    <a class="img_bot" href="https://at08.mediawz.com/gia-ca-phe-the-gioi-dao-chieu-trong-thang-2/">
                                                        <img width="480" height="480" src="https://at08.mediawz.com/wp-content/uploads/2020/06/g7.jpg" class="attachment-thumb_480x480 size-thumb_480x480 wp-post-image" alt="Giá cà phê thế giới đảo chiều trong tháng 2" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/g7.jpg 480w, https://at08.mediawz.com/wp-content/uploads/2020/06/g7-300x300.jpg 300w, https://at08.mediawz.com/wp-content/uploads/2020/06/g7-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/g7-100x100.jpg 100w" sizes="100vw" /> </a>
                                                </div>
                                                <div class="content_blog">
                                                    <div class="content_right">
                                                        <span class="short_time">
                                                            <i class="fas fa-calendar-alt"></i> 08/06/2020 </span>
                                                        <h3>
                                                            <a href="https://at08.mediawz.com/gia-ca-phe-the-gioi-dao-chieu-trong-thang-2/" title="Giá cà phê thế giới đảo chiều trong tháng 2">Giá cà phê thế giới đảo chiều trong tháng 2</a>
                                                        </h3>
                                                    </div>
                                                    <div class="summary_item_blog">
                                                        <p>Các chuyên gia dự đoán thâm hụt toàn cầu một triệu bao loại 60 kg trong niên vụ 2019 - 2020, trong khi ước tính thặng dư là 4,25 triệu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog_index">
                                            <div class="myblog">
                                                <div class="image-blog-left a-center">
                                                    <a class="img_bot" href="https://at08.mediawz.com/ca-phe-dang-dung-truoc-nguy-co-tuyet-chung/">
                                                        <img width="480" height="480" src="https://at08.mediawz.com/wp-content/uploads/2020/06/g6.jpg" class="attachment-thumb_480x480 size-thumb_480x480 wp-post-image" alt="Cà phê đang đứng trước nguy cơ&#8230;tuyệt chủng?" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/g6.jpg 480w, https://at08.mediawz.com/wp-content/uploads/2020/06/g6-300x300.jpg 300w, https://at08.mediawz.com/wp-content/uploads/2020/06/g6-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/g6-100x100.jpg 100w" sizes="100vw" /> </a>
                                                </div>
                                                <div class="content_blog">
                                                    <div class="content_right">
                                                        <span class="short_time">
                                                            <i class="fas fa-calendar-alt"></i> 08/06/2020 </span>
                                                        <h3>
                                                            <a href="https://at08.mediawz.com/ca-phe-dang-dung-truoc-nguy-co-tuyet-chung/" title="Cà phê đang đứng trước nguy cơ&#8230;tuyệt chủng?">Cà phê đang đứng trước nguy cơ&#8230;tuyệt chủng?</a>
                                                        </h3>
                                                    </div>
                                                    <div class="summary_item_blog">
                                                        <p>Các chuyên gia dự đoán thâm hụt toàn cầu một triệu bao loại 60 kg trong niên vụ 2019 - 2020, trong khi ước tính thặng dư là 4,25 triệu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article><!-- #post-## -->
    </div><!-- #primary -->

</section><!-- #site-main-hl -->


@endsection