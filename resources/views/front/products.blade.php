@extends('front.layouts.master')

@section('content')
	@if(count($product_codes)>0)
        <div class="box">
        <!-- stuff -->
        <p class="bet_time">Bet 5 days ago</p>
    </div>
            <div class="container">
        @foreach($product_codes as $product_code)
            <?php $products = \App\Product::where('product_code',$product_code)->where('cat_id',$id)->get();?>
            <div class="row" style="display: flex;flex-wrap: wrap;">
            @foreach($products as $key => $product)
                <div class="col-sm-2">
                    <div class="product-text">
                    <figure>
                        <img class="card-img-top" height="150px" width="100%" src="{{asset('products/'.$product->product_image)}}" alt="Card image cap">
                    </figure>
                        <ul class="list-group" style="color: black;margin-top:-18px;margin-bottom: 13px;font-weight: 500">
                            <li class="list-group-item">Product Code: {{$product->product_code}} - {{$key + 1}}</li>
                            <li class="list-group-item">Product Description: {{$product->description}}</li>
                            <li class="list-group-item">Height:{{$product->length}} cm</li>
                            <li class="list-group-item">Width:{{$product->width}} cm</li>
                            @if($product->pages) <li class="list-group-item">Pages:{{$product->pages}}</li>@endif
                        </ul>
                        {{--<figcaption class="figure-caption"></figcaption>--}}
                        {{--<figcaption class="figure-caption"></figcaption>--}}
                        {{--<figcaption class="figure-caption"></figcaption>--}}
                        {{--<figcaption class="figure-caption"></figcaption>--}}
                        {{--<figcaption class="figure-caption"></figcaption>--}}
                    </div>
                </div>
            @endforeach
            </div>
                <hr style="height:1px;border:none;color:#333;background-color:#333;">
        @endforeach
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

