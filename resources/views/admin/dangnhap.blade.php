@extends('layouts.master')

@section('content')

    	<section id="site-main-hl">
    	<div class="breadcrumb_nobackground margin-bottom-40">
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
        	<p id="breadcrumbs" class="breadcrumb"><span><span><a href="http://at08.wiza.vn/">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Tài khoản</span></span></span></p>    
        </div>
    </section>    
</div>
<section class="page margin-bottom-25">
	<div class="container">
		<article id="post-15" class="post-15 page type-page status-publish hentry">
	<div class="page-title category-title">
        <h1 class="title-head">Tài khoản</h1>    </div>
                
	<div class="entry-content content-page rte">
		<div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
    
        @if(session('success'))
							<div class="alert alert-success">
									{{ session('success') }}
							</div>
		@endif
		<h2>Đăng nhập</h2>

		<form  action="{{route('admin.postLogin')}}" class="woocommerce-form woocommerce-form-login login" method="post">
            @csrf
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Tên địa chỉ email&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" autocomplete="username" value="" required/>			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" required/>
			</p>

			
			<p class="form-row">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span>
				</label>
				<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="85d3789733" /><input type="hidden" name="_wp_http_referer" value="/tai-khoan/" />				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button>
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="https://at08.mediawz.com/tai-khoan/lost-password/">Quên mật khẩu?</a>
			</p>

		</form>
</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
    </div>
</div><!-- .wrap -->

	</section><!-- #site-main-hl -->
    
	    
  @endsection