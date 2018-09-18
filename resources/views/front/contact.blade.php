@extends('front.layouts.master')

@section('content')
	@if(session()->has('message'))
		<div class="alert alert-success alert-dismissible">
			{{ session()->get('message') }}
		</div>
	@endif
	<div class="contact">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Contact Us</h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="col-md-7">
			<div class="map">
				<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=dhalko%20nepal&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net">crocothemes.net</a></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
			</div>
		</div>

		<div class="contact-info">
			<div class="col-md-5">
				<ul>
					<li><i class="fa fa-home fa-2x"></i> Office # 38, Kathmandu</li>
					<li><i class="fa fa-phone fa-2x"></i> +38 000 129900</li>
					<li><i class="fa fa-envelope fa-2x"></i> info@domain.net</li>
				</ul>
			</div>
		</div>
	</div>

	<form action="{{route('sendmessage')}}" method="post" class="contact-form">
		{{ csrf_field() }}
		<div class="container">
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" name="name" class="form-control" id="exampleInputName" placeholder="name">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="text"  name="phone" class="form-control" id="exampleInputPhone" placeholder="phone">
				</div>
			</div>
		</div>

		<div class="container">
			<div class="col-lg-12">
				<textarea class="form-control" name="message" rows="5"></textarea>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
				</div>
			</div>
		</div>
	</form>
@endsection