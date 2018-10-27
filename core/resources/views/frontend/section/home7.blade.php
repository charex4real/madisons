<section id="testimonial1" class="testimonial testimonial-2 bg-gray">
	<div class="container">
		<div class="row">			
			<div class="col-xs-12 col-sm-12  col-md-10 col-md-offset-1">
				<div id="testimonial-full" class="testimonial-full">
					<!-- Testimonial #1 -->
					 @foreach($userReview as $item)
					<div class="testimonial-panel">
						<div class="testimonial-img">
							<img src="{{$item->image}}" alt="Testimonial Author">
						</div>
						<div class="testimonial-icon"></div><!-- .testimonial-icon end -->
						<div class="testimonial-body">
							<p> {!! $item->description !!}</p>
							<div class="testimonial-meta">
								<h4>{{$item->name}}</h4>
								<p>{{$item->position}}</p>
							</div><!-- .testimonial-meta end -->
						</div><!-- .testimonial-body end -->
					</div><!-- .testimonial-panel end -->
					
					   @endforeach
				</div><!-- #testimonial-oc end -->
			</div><!-- .col-md-4 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #testimonial2 end -->
