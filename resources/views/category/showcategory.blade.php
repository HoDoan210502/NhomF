@extends('home')
@section('homecontent')
<div class="section">
		<!-- container -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container" id="catehere">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<br>
							<h3 class="aside-title">Categories</h3>
							@foreach($category as $key => $pro)
							<div>
								<p></p>
								<a href="{{URL::to('/category-list/'.$pro->category_id)}}">
								<i class="fa fa-check" aria-hidden="true"></i>{{$pro->category_name}}
								</a>
							</div>
							@endforeach
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								@foreach($manu as $key => $pro2)
								<div>

									<p></p>
									<a href="{{URL::to('/manu-list/'.$pro2->manu_id)}}"><i class="fa fa-check" aria-hidden="true"></i>
										{{$pro2->manu_name}}
									</a>
								</div>
								@endforeach
							</div>
						</div>
						<!-- /aside Widget -->


					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
					 CODE PHAN NAY
						<!-- /store products -->

						<!-- store bottom filter -->
						{{ $all_product->links('pagination::bootstrap-4', ['prev_text' => '', 'next_text' => '']) }}
						/store bottom filter
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- /container -->
	</div>
@endsection