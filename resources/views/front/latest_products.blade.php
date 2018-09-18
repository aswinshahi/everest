@extends('front.layouts.master')

@section('content')
    <?php $products = \App\Product::where('latest',true)->take(5)->get();?>
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
	@else
		<div class="skill">
			<div class="container">
				<div class="services-skill">
					<div class="text-center">
		<h1 style="color: black">No Any Products</h1>
					</div>
				</div>
			</div>
		</div>
	@endif
@endsection