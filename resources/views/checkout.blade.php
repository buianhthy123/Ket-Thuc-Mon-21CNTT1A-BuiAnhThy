@extends('layouts.master')

@section('content')

<section id="site-main-hl">
	<div class="breadcrumb_nobackground margin-bottom-40">
		<section class="bread-crumb">
			<span class="crumb-border"></span>
			<div class="container">
				<p id="breadcrumbs" class="breadcrumb"><span><span><a href="http://at08.wiza.vn/">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Thanh toán</span></span></span></p>
			</div>
		</section>
	</div>
	<section class="page margin-bottom-25">
		<div class="container">
		@if(session('success'))
					<div class="alert alert-success">
							{{ session('success') }}
					</div>
			@endif
			<article id="post-14" class="post-14 page type-page status-publish hentry">
				<div class="page-title category-title">
					<h1 class="title-head" align="center">Thanh toán</h1>
				</div>
				<br><br>
				<div class="entry-content content-page rte">
					<div class="woocommerce">

						<div class="woocommerce-notices-wrapper"></div>
						<form method="post" class="checkout woocommerce-checkout" action="{{route('banhang.postdathang')}}" enctype="multipart/form-data">
							@csrf

							<div class="col2-set" id="customer_details">
								<div class="col-1">
									<div class="woocommerce-billing-fields">
										<div class="woocommerce-billing-fields__field-wrapper">
											<!-- Thông tin thanh toán ở đây -->
											<div class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
												<label for="billing_first_name" class="">Họ và tên &nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
												<span class="woocommerce-input-wrapper">
													<input type="text" class="input-text " name="name" id="billing_first_name" placeholder="Họ và tên" value="" autocomplete="given-name" />
												</span>
											</div>
											<div class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
												<label for="billing_last_name" class="">Giới tính&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
												<span class="woocommerce-input-wrapper">
													<input type="text" class="input-text " name="gender" id="billing_last_name" placeholder="Giới tính" value="" autocomplete="family-name" />
												</span>
											</div>
											<div class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
												<label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
												<span class="woocommerce-input-wrapper">
													<input type="text" class="input-text " name="address" id="billing_address_1" placeholder="Địa chỉ" value="" autocomplete="address-line1" />
												</span>
											</div>

											<div class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
												<label for="billing_phone" class="">Số điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
												<span class="woocommerce-input-wrapper">
													<input type="tel" class="input-text " name="phone_number" id="billing_phone" placeholder="Số điện thoại" value="" autocomplete="tel" />
												</span>
											</div>
											<div class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
												<label for="billing_email" class="">Địa chỉ email&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
												<span class="woocommerce-input-wrapper">
													<input type="email" class="input-text " name="email" id="billing_email" placeholder="Địa chỉ email" value="" autocomplete="email username" />
												</span>
											</div>
											<div class="woocommerce-additional-fields__field-wrapper">
												<p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span class="optional">(tuỳ chọn)</span></label><span class="woocommerce-input-wrapper"><textarea name="note" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2" cols="5"></textarea></span></p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-2">


									<h3 id="order_review_heading" align="center">Đơn hàng của bạn</h3>

									<div id="order_review" class="woocommerce-checkout-review-order">
										<!-- Chi tiết đơn hàng ở đây -->
										<div id="order_review" class="woocommerce-checkout-review-order">
											<table class="shop_table woocommerce-checkout-review-order-table">

												<thead>
													<tr>
														<th class="product-name">Sản phẩm</th>
														<th class="product-total">Tạm tính</th>
													</tr>
												</thead>
												<tbody>
													@isset($productCarts)
													@foreach($productCarts as $product)
													<tr class="cart_item">
														<td class="product-name">
															{{$product['item']->name}} <strong class="product-quantity">&times; {{$product['qty'] }}</strong>
														</td>
														<td class="product-total">
															<span class="woocommerce-Price-amount amount">{{$product['qty'] * $product['item']->giatien}} <span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
														</td>
													</tr>
													@endforeach
													@endisset
												</tbody>
												<tfoot>
													<tr class="order-total">
														<th>Tổng</th>
														<td><strong><span class="woocommerce-Price-amount amount">{{isset($totalPrice) ? $totalPrice : 0}}VNĐ<span class="woocommerce-Price-currencySymbol"></span></span></strong></td>
													</tr>
												</tfoot>
											</table>


											<div id="payment" class="woocommerce-checkout-payment">
												<ul class="wc_payment_methods payment_methods methods">

													<li class="wc_payment_method payment_method_cod">
														<label for="payment_method_cod"> Trả tiền mặt khi nhận hàng </label>
														<div class="payment_box payment_method_cod" style="display:none;">
														<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="Thanh toán khi nhận hàng" data-order_button_text="">
														</div>
													</li>
												</ul>
											</div>
											<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng" style="display: block; margin: 0 auto;">Đặt hàng</button>

										</div>
									</div>
								</div>
							</div>

						</form>

					</div>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</div>
	</section><!-- #site-main-hl -->
	@endsection