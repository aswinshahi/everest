@extends('front.layouts.master')
<style>
	img {
		display: block;
	}

	.thumbnail {
		position: relative;
		display: inline-block;
	}

	.caption {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate( -50%, -50% );
		text-align: center;
		color: white;
		font-weight: bold;
	}
</style>
@section('content')
	<div class="slider" style="margin-top:2px">
		<div class="img-responsive">
			<ul class="bxslider">
				<li><img src="{{asset('slider/1.jpg')}}" alt=""/></li>
				<li><img src="{{asset('slider/2.jpg')}}" alt=""/></li>
				<li><img src="{{asset('slider/3.jpg')}}" alt=""/></li>
			</ul>
		</div>
	</div>
	<div class="thumbnail">
		<img src="{{asset('images/texture1.jpg')}}" height="150" width="1100" alt=""/>
		<div class="caption" >
			<p style="color:black;font-family:'Comic Sans MS';font-size: 146%">Beauty of handmade lies in its imperfection anything perfect is machine-made</p>
		</div>
	</div>

	<div>
	</div>
	<script>
        setInterval(function () {$(".bx-next").click();}, 9000);
	</script>
@endsection