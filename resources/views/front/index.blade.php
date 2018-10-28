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
	<div class="thumbnail">
		<img src="{{asset('images/texture1.jpg')}}" height="150" width="1300" alt=""/>
		<div class="caption" >
			<p style="color:darkblue;font-family:'Comic Sans MS';font-size: 146%">"Beauty of handmade lies in its imperfection anything perfect is machine-made"</p>
			<p style="color:black;font-family:'Comic Sans MS';font-size: 90%;text-decoration: underline">Feel Free to contact us for:
			</p>
			<p style="color:black;font-family:'Comic Sans MS';font-size: 90%">
				- Wholesale and Retail rates  &nbsp;&nbsp;           - Customized orders
			</p>
		</div>
	</div>
    <?php $products = \App\Product::take(4)->get();?>
	@if(count($products)>0)
		<div class="container">
			<div class="row">
				@foreach($products as $product)
					<div class="col-sm-3">
						<figure class="figure product-text">
							<img class="card-img-top" height="150" width="150" src="{{asset('products/'.$product->product_image)}}" alt="Card image cap">
							<figcaption class="figure-caption">{{$product->title}}</figcaption>
							<figcaption class="figure-caption">{{$product->description}}</figcaption>
							<figcaption class="figure-caption">{{$product->length}} X {{$product->width}}</figcaption>
						</figure>
					</div>
				@endforeach
			</div>
		</div>
		@endif

	<div>
	</div>
	<script>
        setInterval(function () {$(".bx-next").click();}, 9000);
	</script>
@endsection