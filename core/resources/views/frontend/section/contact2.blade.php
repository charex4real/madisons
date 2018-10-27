<section class="contact">
	<div class="container">
			<div class="row heading-1 mb-60 clearfix">
			<div class="col-xs-12 col-xs-offset-1 col-sm-12 col-md-3 col-md-offset-1">
				<div class="heading mb-0">
					
					<h2>{{$data->contact_title}}</h2>
				</div><!-- .heading end -->
			</div><!-- .col-md-4 end -->
			<div class="col-xs-12 col-sm-12 col-md-6">
				<p class="mb-0">{!! $data->contact_description !!}</p>
			</div><!-- .col-md-8 end -->
		</div><!-- .row end -->
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 widget-contact p-none-xs p-none-sm">
				<form id="messageForm" action="" method="POST">
                    {{csrf_field()}}
					<div class="col-md-6">
						<input type="text" class="form-control mb-30"  id="name" placeholder="Name :" required/>
					</div>
					<div class="col-md-6">
						<input type="email" class="form-control mb-30" name="contact-email" id="email" placeholder="Email :" required/>
					</div>
					<div class="col-md-12">
						<textarea class="form-control mb-30" name="contact-message" id="message" rows="4" placeholder="Message" required></textarea>
					</div>
					<div class="col-md-12">
						<button type="submit" id="submit-message" class="btn btn-primary btn-block">Send Message</button>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 mt-xs">
						<!--Alert Message-->
						<div id="contact-result"></div>
					</div>
				</form>
			</div><!-- .col-md-8 end -->
			
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="contct-widget-content">
					
					<div class="widget-contact-info mt-md">
						<div class="col-xs-12 col-sm-12 col-md-6 mb-30-xs mb-30-sm">
							<h6>Phone :</h6>
							<p><i class="fa fa-phone"></i>{{$data->phone}}</p>
							
						</div><!-- .col-md-6 end -->
						<div class="col-xs-12 col-sm-12 col-md-6">
							<h6>Email :</h6>
							<p class="mb-0"><i class="fa fa-envelope"></i>{{$data->email}}</p>
						</div><!-- .col-md-6 end -->
						<div class="col-xs-12 col-sm-12 col-md-12 mt-30">
							<h6>Address :</h6>
							<p class="mb-0"><i class="fa fa-map-marker"></i>{!! $data->address !!}</p>
						</div><!-- .col-md-12 end -->
					</div>
				</div>
			</div><!-- .col-md-4 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section>
