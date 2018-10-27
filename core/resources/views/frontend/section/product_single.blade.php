<section id="product" class="shop product shop-product bg-white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12  col-md-9">
				<!-- Alert Message -->
				<!-- .aret end --> 
				
				<div class="portfolio-img mb-50">
					<img src="{{asset($product->image)}}" alt="{{$product->title}}" 
					width="500px;" class="img-responsive"/>
				</div><!-- .product-img end -->
				<div class="product-title">
					<h5>{{$product->name}}</h5>
					<h4>{{$product->title}}</h4>
				</div>
				<!-- .product-title end -->
				
				<!-- .product-price end -->
				<div class="product-desc">
					{!! $product->description !!}
				</div><!-- .product-desc end -->
				<br>
				<!-- .product-action end -->
				<!-- .product-share end -->
				<div class="product-tabs">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"></li>
					</ul>
						
					<!-- Tab panes -->
					<div class="tab-content">
						<!-- #details end -->
						<!-- <div role="tabpanel" class="tab-pane reviews" id="reviews"> 
							-->
							<div class="form-review">
								<form>
									<input type="text" class="form-control" id="name" placeholder="Your Name"/>
									<input type="number" class="form-control" id="number" placeholder="Your phone number"/>
									<input type="email" class="form-control" id="email" placeholder="Your Email"/>
									<button type="submit" class="btn btn-primary btn-block">Quote</button>
								</form>
							</div>
								<!-- </div>-->
							<!-- #reviews end -->
					</div>
					<!-- #tab-content end -->
				</div><!-- .product-tabs end -->
			
			</div><!-- .product-item end -->
			@include('frontend.section.category-sidebar')
		</div><!-- .row end -->	
		
	</div><!-- .container end -->
</section><!-- #product end -->
