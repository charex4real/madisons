<section id="page-title" class="page-title bg-overlay bg-overlay-dark">
	<div class="bg-section" >
		<img src="{{asset('assets/frontend/images/page-title/title-17.jpg')}}" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="title-1 text-center">
					<ol class="breadcrumb">
						<li><a href="{{route('website')}}">Home</a></li>
						<li class="active">{{$titles}}</li>
					</ol>
					<div class="title-heading">
						<h2>{{$titles}}</h2>
					</div>
				</div><!-- .page-title end -->
			</div><!-- .col-md-12 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #page-title end -->
