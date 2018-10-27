<section id="shortcode4" class="shortcode-4 bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12  col-md-8 col-md-offset-2 mb-60">
				<div class="heading heading-3 text-center mb-0">
					<div class="heading-bg">
						<h2>Our Achievements</h2>
					</div>
				</div><!-- .heading end -->
			</div><!-- .col-md-8 end -->
		</div><!-- .row end -->
		<!-- .row end -->
		<div class="row">
			 
			<!-- Fact #1 -->
			 @foreach($achievements as $item)
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="facts bg-white">
					<i class="icon-fact icon {{$item->icon}}"></i>
					<div class="facts-box">
						<div class="counter">
							{{$item->total}}
						</div>
						<h4>{{$item->title}}</h4>
					</div>
				</div>
			</div>
			 @endforeach
			
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>