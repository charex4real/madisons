<section id="team" class="team team-1 pb-lg bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12  col-md-8 col-md-offset-2 mb-60">
				<div class="heading heading-2 text-center mb-0">
					<div class="heading-bg">
						<p class="mb-0">{{$data->team_title}}</p>
						
					</div>
				</div><!-- .heading end -->
				<p class="mb-0 text-center">{!! $data->team_description !!}</p>
			</div><!-- .col-md-8 end -->
		</div><!-- .row end -->
		<div class="row">
			<!-- Member #1 -->
		@foreach($teamMembers as $item)
			<div class="col-xs-12 col-sm-6 col-md-3 member">
				<div class="member-img">
					<img src="{{asset($item->image)}}" alt="member"/>
					<div class="member-bg"></div>
					<div class="member-overlay">
						<h6>{{$item->position}}</h6>
						<h5>{{$item->name}}</h5>
					</div><!-- .memebr-ovelay end -->
					<div class="member-hover">
						<h6>{{$item->position}}</h6>
						<h5>{{$item->name}}</h5>
						<p>{{$item->description}}</p>
						<div class="member-social">
							<a href="{{$item->lnk_one}}"><i class="fa fa-facebook"></i></a>
							<a href="{{$item->lnk_two}}"><i class="fa fa-twitter"></i></a>
							<a href="{{$item->lnk_three}}"><i class="fa fa-google-plus"></i></a>
							<a href="{{$item->lnk_four}}"><i class="fa fa-linkedin"></i></a>
						</div>
					</div><!-- .member-hover end -->
				</div><!-- .member-img end -->
			</div><!-- .member end -->
		 @endforeach

		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #team end -->
