@extends('front.layout.index')

@section('content')
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-8 col-md-offset-1">
								<div class="row">
									<div class="col-md-12">
										<h3>
											<b>Danh sách videos:</b>
										</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">										
											<div class="row">
											@foreach($video as $vd)
											<div class="col-md-4 well">
												<a href="video/{{$vd->id}}"><img  class="img-responsive" alt="Bootstrap Image Preview" src="{{$vd->image}}" /></a>
												<br>
												<a href="video/{{$vd->id}}">{{$vd->name}}</a>
												<br>
												{{$vd->singer}}
												<br>
												<i class="glyphicon glyphicon-eye-open"></i>{{$vd->view}} lượt xem
											</div>
											@endforeach
											<hr>
										</div>
										
									</div>
								</div>
								<!-- <ul class="pagination pagination-sm">
									<li>
										<a href="#">Prev</a>
									</li>
									<li>
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li>
										<a href="#">3</a>
									</li>
									<li>
										<a href="#">4</a>
									</li>
									<li>
										<a href="#">5</a>
									</li>
									<li>
										<a href="#">Next</a>
									</li>
								</ul> -->
								{!!$video->links()!!}
							</div>
							<div class="col-md-2 col-md-offset-1" >
								<div class="row">
									<div class="col-md-12">
										<h3>
											<b>Top xem nhiều</b>
										</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<?php 
											$data = $video->sortByDesc('view')->take(4);
										 ?>
										@foreach($data->all() as $dt)
										<div class="row">
											<div class="col-md-12 well">
												<a href="#"><img  class="img-responsive" alt="Bootstrap Image Preview" src="{{$dt->image}}" /></a>
												<br>
												<a href="#">{{$dt->name}}</a>
												<br>
												{{$dt->singer}}
												<br>
												<i class="glyphicon glyphicon-eye-open"></i>{{$dt->view}} lượt xem
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection