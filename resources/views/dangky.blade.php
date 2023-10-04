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

		<h2>Đăng nhập</h2>
        
        @if(session('success'))
						<div class="alert alert-success">
									{{ session('success') }}
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

		<form action="{{route('postSignin')}}" class="woocommerce-form woocommerce-form-login login" method="post">
            @csrf
			
             <div class="form-block">
				<label for="name">Họ Và Tên*</label>
				<input type="text" name="name" required>
			</div>
		    <div class="form-block">
				<label for="email">Email*</label>
				<input type="email" name="email" required>
			</div>

			<div class="form-block">
				<label for="address">Địa Chỉ*</label>
				<input type="text" name="address"  required>
			</div>
			<div class="form-block">
				<label for="phone">Số ĐT*</label>
				<input type="text" name="phone_number" required>
			</div>
			<div class="form-block">
				<label for="password">Mật Khẩu*</label>
				<input type="password" name="password" required>
			</div>
			<div class="form-block">
				<label for="repassword">Nhập lại mật khẩu*</label> 
				<input type="password" name="repassword" id='repassword' required>
			</div>

			
			<p class="form-row">
				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" value="Đăng Ký">Đăng ký</button>
			</p>

			
		</form>


</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
    </div>
</div><!-- .wrap -->

	</section><!-- #site-main-hl -->
    
	    
  @endsection