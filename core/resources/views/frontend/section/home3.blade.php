<section id="portfolio-gallery-3col" class="portfolio portfolio-gallery portfolio-3col">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12  col-md-8 col-md-offset-2 mb-60">
				<div class="heading heading-2 text-center mb-0">
					<div class="heading-bg">
					<h1>Our Products</h1>
					</div>
				</div><!-- .heading end -->
				<p class="mb-0 text-center">We offer a comprehensive range of quality ergonomic chairs. Madison Jay provide contemporary office chairs that give you value for your money.  </p>
			</div><!-- .col-md-8 end -->
		</div><!-- .row end -->
		<div class="row">
			<!-- Portfolio Filter
			============================================= -->
			<div class="col-xs-12 col-sm-12  col-md-12 portfolio-filter text-center">
				<ul class="list-inline">
					<li><a class="active-filter" href="#" data-filter="*">All</a></li>
					
					@php

						 function cleanlink($title){
						      $title = trim($title);
						      $title = str_replace("/", "-", $title);
						       $title = str_replace("?", "", $title);
						       $title = str_replace(".", "", $title);
						       $title = str_replace("<", "", $title);
						       $title = str_replace(">", "", $title);
						       $title = str_replace(",", "", $title);
						       $title = str_replace("--", "", $title);
						       $title = str_replace(" ", "-", $title);

						         return $title;
						}

					@endphp

				@foreach($categories as $item)
					<li><a href="#" data-filter=".{{ cleanlink($item->name)}} ">{{$item->name}}</a></li>
				 @endforeach
				</ul>
			</div>
			<!-- .Portfolio-filter end --> 
		</div>
		<div id="portfolio-all" class="row">
			<!-- Portfolio #1 -->

		 @foreach ($cartegory_and_products as $category)
			<div class="col-xs-12 col-sm-6 col-md-4  portfolio-item {{ cleanlink($category->name)}}">
				 @foreach ($category->Products as $product)
				<div class="portfolio-img">
					<img src="{{$product->image}}" alt="Portfolio Item" class="img-responsive">
					<div class="portfolio-hover">
						<div class="portfolio-meta">
								<h3><span>{{$product->name}}</span></h3>
								<h4>{{$product->title}}</h4>
							<div class="portfolio-title">
								{!! $product->description !!}
                            <a class="likes" href='{{url("product/$product->id")}}'>
										<i class=""></i><span>View / Request Qoute</span>
								</a>
							</div>
						</div><!-- .Portfolio-meta end -->
						<div class="portfolio-action">
						
						
					</div><!-- .Portfolio-action end -->
					</div><!-- .Portfolio-hover end --> 
				</div><!-- .Portfolio-img end -->
				 @endforeach
			</div><!-- . portfolio-item  end -->
			
			 @endforeach
		</div><!-- .row end -->
		<!-- .row end -->

		
        <div class="row">
			<div class="col-xs-12 col-sm-12  col-md-2 col-md-offset-5 portfolio-more ">
				<a href="portfolio-gallery-3col-left-sidebar.html">Load More <i class="fa fa-angle-double-right"></i></a>
			   </div><!-- .col-md-2 end -->
		</div>
	    </div><!-- .container end -->
</section><!-- #portfolio-gallery-3col end -->
