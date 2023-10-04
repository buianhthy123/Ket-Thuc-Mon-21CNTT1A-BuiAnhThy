@extends('layouts.master')

@section('content')
<section id="site-main-hl">
    <div class="breadcrumb_nobackground margin-bottom-40">
        <section class="bread-crumb">
            <span class="crumb-border"></span>
            <div class="container">
                <p id="breadcrumbs" class="breadcrumb"><span><span><a href="http://at08.wiza.vn/">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Sản phẩm</span></span></span></p>
            </div>
        </section>
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="row">
                    <div class="bg_collection collection_2">
                        <div class="main_container col-lg-12 padding-col-left-0">
                            <div class="box-heading relative heading">
                                <h1 class="title-head margin-top-0">Sản phẩm</h1>

                            </div>

                            <div class="category-products products f-left w_100 margin-top-70">
                                <section class="clearfix wrap_item_list row products columns-4">
                                    @foreach($sanphams as $sanpham)
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

                                    @endforeach

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section><!-- #site-main-hl -->

@endsection