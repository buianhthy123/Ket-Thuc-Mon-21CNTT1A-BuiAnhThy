@extends('layouts.master')

@section('content')
    <div class="container">
    	<div class="row">
        	<div class="details-product">
            	<div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="col_large_fix1img large-image">
						<a class="checkurl">
                        	<img width="600" height="600" src="https://at08.mediawz.com/wp-content/uploads/2020/06/p-8.jpg" class="checkurl img-responsive wp-post-image" alt="Cà phê Americano" srcset="https://at08.mediawz.com/wp-content/uploads/2020/06/p-8.jpg 600w, https://at08.mediawz.com/wp-content/uploads/2020/06/p-8-300x300.jpg 300w, https://at08.mediawz.com/wp-content/uploads/2020/06/p-8-150x150.jpg 150w, https://at08.mediawz.com/wp-content/uploads/2020/06/p-8-100x100.jpg 100w" sizes="100vw" />						</a>
					</div>
            	</div>
        	
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 details-pro style_product">
                    <div class="summary-entry-summary">
                    	<div class="f-left w_100" itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                            <div class="group-status">
                                <div class="reviews_details_product first_status">                                                            </div>
                                <span class="first_status">Thương hiệu: <span class="status_name">Trung Nguyên</span></span>
                                                            </div>
                        </div>
                        <h1 class="product_title entry-title title-product">{{$sanphams[0]->name}}</h1><div class="price-box"> 
    <div class="special-price">
    	<span class="price product-price"><span class="woocommerce-Price-amount amount">{{$sanphams[0]->giatien}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span> 
    </div>
</div>

	
<form class="cart" action="https://at08.mediawz.com/san-pham/ca-phe-americano/" method="post" enctype='multipart/form-data'>
		
        <div class="quantity">
            <label class="screen-reader-text" for="quantity_650ba092cede6">Cà phê Americano số lượng</label>

        <a href="{{route('banhang.addToCart', $sanphams[0]->id)}}" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>

        </form>


<div style="float:left; width:100%;">
<b class="b_infor">Thông tin:</b>
<section class="product-summary product_description margin-bottom-0">
    <div class="woocommerce-product-details__short-description rte description">
        <p>Cà phê Americano được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột</p>
    </div>
</section>
</div>
<div class="product_meta">

	

	
	
	<span class="posted_in">Danh mục: <a href="https://at08.mediawz.com/danh-muc-san-pham/ca-phe-cam-hung/" rel="tag">Cà phê cảm hứng</a>, <a href="https://at08.mediawz.com/danh-muc-san-pham/ca-phe-pha-viet/" rel="tag">Cà phê pha Việt</a>, <a href="https://at08.mediawz.com/danh-muc-san-pham/ca-phe-the-gioi/" rel="tag">Cà phê thế giới</a>, <a href="https://at08.mediawz.com/danh-muc-san-pham/do-uong/" rel="tag">Đồ uống</a></span>
	
	
</div>
                    </div>	
                </div>
            </div>
        </div>
    </div>

		
		<div class="container">
		<div class="row">
			<div class="tab_h">
            	<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                	<div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                                                            <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                    <a href="#tab-description">
                                        Mô tả                                    </a>
                                </li>
                                                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                    <a href="#tab-reviews">
                                        Đánh giá (0)                                    </a>
                                </li>
                                                    </ul>
                                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                
	<h2>Mô tả</h2>

<p>Cà phê Americano được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột; sau đó trải qua quá trình sàng lọc, rang xay dưới sự kiểm soát nghiêm ngặt về nhiệt độ và thời gian để đạt đến đỉnh cao của mùi thơm, độ nở và hương vị riêng biệt. Sự hài hòa trong tỷ lệ pha trộn giữa hạt cà phê Robusta và Arabica mang đến cho khách hàng những ly cà phê pha máy – kiểu Ý nhưng vẫn đậm đà bản sắc và đặc trưng của văn hóa nước Việt Nam.</p>
                            </div>
                                                  
	
	<div class="clear"></div>
</div>
                            </div>
                                        
                                            </div>
                </div>
            </div>
        </div>
   </div>

	

</div>


		
	</main></div>	</section><!-- #site-main-hl -->
    
	@endsection