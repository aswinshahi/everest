@extends('front.layouts.master')

@section('content')
	<div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">
				<li><img src="{{asset('slider/4.jpg')}}" alt=""/></li>
				<li><img src="{{asset('slider/5.jpg')}}" alt=""/></li>
				<li><img src="{{asset('slider/6.jpg')}}" alt=""/></li>
			</ul>
		</div>
	</div>
	<script>
        setInterval(function () {$(".bx-next").click();}, 9000);
	</script>
@endsection