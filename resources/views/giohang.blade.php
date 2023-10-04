@extends('layouts.master')

@section('content')

<section id="site-main-hl">
<div class="breadcrumb_nobackground margin-bottom-40">
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
        	<p id="breadcrumbs" class="breadcrumb"><span><span><a href="http://at08.wiza.vn/">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Giỏ hàng</span></span></span></p>    
        </div>
    </section>    
</div>
<section class="page margin-bottom-25">
	<div class="container">
		<article id="post-13" class="post-13 page type-page status-publish hentry">
	<div class="page-title category-title">
        <h1 class="title-head">Giỏ hàng</h1>    </div>
                
	<div class="entry-content content-page rte">
		<div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
<form class="woocommerce-cart-form" action="https://at08.mediawz.com/gio-hang/" method="post">
	
	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name">Sản phẩm</th>
				<th class="product-price">Giá</th>
				<th class="product-quantity">Số lượng</th>
				<th class="product-subtotal">Tạm tính</th>
			</tr>
		</thead>
		<tbody>
					@isset($cart)
               @foreach($cart->items as $id => $product)

							<tr class="woocommerce-cart-form__cart-item cart_item">

						<td class="product-remove">
							<a href="{{ route('banhang.xoagiohang', ['id' => $product['item']->id]) }}" class="remove" aria-label="Xóa sản phẩm này" data-product_id="198" data-product_sku="">&times;</a>
						</td>
						<td class="product-thumbnail">
						<a href="">
								<img width="300" height="300" src="{{ asset('/source/image/sanpham/' . $product['item']->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="100vw" />
						</a>

						<td class="product-name" data-title="Sản phẩm">
									<a href="https://at08.mediawz.com/san-pham/ca-phe-espresso">{{$product['item']->name}}</a>
							</td>
						<td class="product-price" data-title="Giá">
							<span class="woocommerce-Price-amount amount">{{$product['item']->giatien}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>						</td>

						<td class="product-quantity" data-title="Số lượng">
							<div class="quantity">
							<label class="screen-reader-text" for="quantity_650ba580ef6ad">Số lượng</label>
							<input type="number" max="10" min="1" name="quantity" value="{{$product['qty']}}" class="quantity-input" id="quantity-input">
					</div>
							</td>

						<td class="product-subtotal" data-title="Tạm tính">
							<span class="woocommerce-Price-amount amount">{{$product['qty'] * $product['item']->giatien}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>						</td>
					</tr>
					@php
                    $totalPrice += $product['qty'] * $product['item']->giatien; // Cộng dồn giá tiền vào biến tổng tiền
                    @endphp
					@endforeach

			@endisset		
			
			<tr>
				<td colspan="6" class="actions">

					<button type="submit" class="button" name="update_cart" value="Cập nhật giỏ hàng">Cập nhật giỏ hàng</button>

					
					<input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="0465b30741" /><input type="hidden" name="_wp_http_referer" value="/gio-hang/" />				</td>
			</tr>

					</tbody>
	</table>
	</form>


<div class="cart-collaterals">
	<div class="cart_totals ">

	
	<h2>Cộng giỏ hàng</h2>

	<table cellspacing="0" class="shop_table shop_table_responsive">

		
		<tr class="order-total">
			<th>Tổng</th>
			<td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount">{{isset($totalPrice) ? $totalPrice : 0}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong> </td>
		</tr>

		
	</table>

	<div class="wc-proceed-to-checkout">
		
<a href="{{route('banhang.getdathang')}}" class="checkout-button button alt wc-forward">
	Tiến hành thanh toán</a>
	</div>

	
</div>
</div>

</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
    </div>
</div><!-- .wrap -->

	</section><!-- #site-main-hl -->
    
  @endsection