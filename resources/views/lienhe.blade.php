@extends('layouts.master')

@section('content')


<section id="site-main-hl">
    <div class="breadcrumb_nobackground margin-bottom-40">
        <section class="bread-crumb">
            <span class="crumb-border"></span>
            <div class="container">
                <p id="breadcrumbs" class="breadcrumb"><span><span><a href="http://at08.wiza.vn/">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Liên hệ</span></span></span></p>
            </div>
        </section>
    </div>
    <div class="page_contact">
        <div class="container">
            <div class="row">
                <div class="select_maps col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="aa mid-footer">
                        <div class="page_cotact">
                            <h1 class="title-head-contact"><span>CÔNG TY TNHH TM DV AT08 COFFEE</span></h1>
                            <div class="text_des">
                                <p>Trải qua hơn 15 năm hoạt động &amp; phát triển, đã từng bước khẳng đinh và tạo sự tín nhiệm trong lòng khách hàng, trở thành một trong những công ty chuyên nghiệp nhất cung cấp Điện thoại, máy tính, thiết bị văn phòng và các giải pháp ứng dụng công nghệ.</p>
                            </div>
                        </div>
                        <div class="list-menu">
                            <div class="widget-db">
                                <div class="item">
                                    <ul class="contact contact_x">
                                        <li>
                                            <span class="txt_content_child"> <i class="fas fa-map-marker-alt"></i> Số 123 Đường Phan Chu Trinh, Quận 10, TP.HCM </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hotline_contact">
                                <ul>
                                    <li class="bp"> <i class="fas fa-user"></i>Bộ phận tư vấn khách hàng: </li>
                                    <li> Hotline: <a class="hai01" href="tel:0123.456.789">0123.456.789</a> </li>
                                    <li> Email: <a href="mailto:contact@demo.com">contact@demo.com</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @if(session('message'))
                <br>
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right_contact">
                    <div class="page-login page_cotact padding-bottom-0">
                        <h2 class="title-head-contact a-left title_2"><span>Gửi tin nhắn cho chúng tôi</span></h2>
                        <div id="pagelogin1">
                            <div class="form-signup clearfix">
                                <div class="row group_contact">
                                    <div role="form" class="wpcf7" id="wpcf7-f245-p40-o1" lang="vi" dir="ltr">
                                        <div class="screen-reader-response" aria-live="polite"></div>
                                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('postLienhe') }}">
                                            @csrf

                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control-lg" aria-required="true" aria-invalid="false" placeholder="Họ và tên" /></span></fieldset>
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="phone_number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control-lg" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" /></span></fieldset>
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control-lg" aria-required="true" aria-invalid="false" placeholder="Email của bạn" /></span></fieldset>
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class="wpcf7-form-control-wrap your-message"><textarea name="mota" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control form-control-lg content-area" aria-required="true" aria-invalid="false" placeholder="Nội dung"></textarea></span></fieldset>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">
                                                <input type="submit" value="Gửi liên hệ" class="wpcf7-form-control wpcf7-submit btn-lienhe btn btn-primary" />
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
        </div>
    </div>

</section><!-- #site-main-hl -->

@endsection