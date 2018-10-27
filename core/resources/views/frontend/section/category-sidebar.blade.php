	<div class="col-xs-12 col-sm-12  col-md-3 sidebar-full">
				
				<br><br><br>
				<div class="widget widget-categories">
					<div class="widget-title">
						<h4>Categories</h4>
					</div>
					<div class="widget-content">
						<ul class="list-unstyled mb-0">
						@foreach ($categories as $item)
							<li>
								<a><i class="fa fa-angle-double-right"></i>{{$item->name}}</a>
							</li>
							
						@endforeach	
						</ul>
					</div>
				</div><!-- .widget-categories end -->

			</div><!-- .sidebar-full end -->
