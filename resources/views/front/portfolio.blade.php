@extends('front.layouts.master')

@section('content')


	<section id="portfolio">
		<div class="container">
			<div class="col-lg-12">
				<div class="text-center">
					<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<h2>Portfolio</h2>
					</div>
					<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>


				{{--<ul class="portfolio-filter text-center">--}}
					{{--<li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>--}}
					{{--<li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>--}}
					{{--<li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>--}}
					{{--<li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>--}}
				{{--</ul><!--/#portfolio-filter-->--}}

                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
				@foreach($categories as $cat)
                        <li><a class="btn btn-default" href="#" data-filter=".{{$cat->id}}">{{$cat->title}}</a></li>
                @endforeach
                </ul>

				<div class="row">
					<div class="portfolio-items">
                        @foreach($products as $product)
                            {{$product->title}}
						<div class="portfolio-item {{$product->cat_id}} col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="{{url('/products',$product->product_image)}}" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="{{url('/products',$product->product_image)}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div>
								</div>
							</div>
						</div><!--/.portfolio-item-->
                            @endforeach

						{{--<div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">--}}
							{{--<div class="recent-work-wrap">--}}
								{{--<img class="img-responsive" src="{{asset('front/images/portfolio/recent/item2.png')}}" alt="">--}}
								{{--<div class="overlay">--}}
									{{--<div class="recent-work-inner">--}}
										{{--<h3><a href="#">Business theme</a></h3>--}}
										{{--<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>--}}
										{{--<a class="preview" href="{{asset('front/images/portfolio/full/item2.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div><!--/.portfolio-item-->--}}

						{{--<div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">--}}
							{{--<div class="recent-work-wrap">--}}
								{{--<img class="img-responsive" src="{{asset('front/images/portfolio/recent/item3.png')}}" alt="">--}}
								{{--<div class="overlay">--}}
									{{--<div class="recent-work-inner">--}}
										{{--<h3><a href="#">Business theme</a></h3>--}}
										{{--<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>--}}
										{{--<a class="preview" href="{{asset('front/images/portfolio/full/item3.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div><!--/.portfolio-item-->--}}

						{{--<div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">--}}
							{{--<div class="recent-work-wrap">--}}
								{{--<img class="img-responsive" src="{{asset('front/images/portfolio/recent/item4.png')}}" alt="">--}}
								{{--<div class="overlay">--}}
									{{--<div class="recent-work-inner">--}}
										{{--<h3><a href="#">Business theme</a></h3>--}}
										{{--<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>--}}
										{{--<a class="preview" href="{{asset('front/images/portfolio/full/item4.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div><!--/.portfolio-item-->--}}

						{{--<div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">--}}
							{{--<div class="recent-work-wrap">--}}
								{{--<img class="img-responsive" src="{{asset('front/images/portfolio/recent/item5.png')}}" alt="">--}}
								{{--<div class="overlay">--}}
									{{--<div class="recent-work-inner">--}}
										{{--<h3><a href="#">Business theme</a></h3>--}}
										{{--<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>--}}
										{{--<a class="preview" href="{{asset('front/images/portfolio/full/item5.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div><!--/.portfolio-item-->--}}

						{{--<div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">--}}
							{{--<div class="recent-work-wrap">--}}
								{{--<img class="img-responsive" src="{{asset('front/images/portfolio/recent/item6.png')}}" alt="">--}}
								{{--<div class="overlay">--}}
									{{--<div class="recent-work-inner">--}}
										{{--<h3><a href="#">Business theme</a></h3>--}}
										{{--<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>--}}
										{{--<a class="preview" href="{{asset('front/images/portfolio/full/item6.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div><!--/.portfolio-item-->--}}

						{{--<div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">--}}
							{{--<div class="recent-work-wrap">--}}
								{{--<img class="img-responsive" src="{{asset('front/images/portfolio/recent/item7.png')}}" alt="">--}}
								{{--<div class="overlay">--}}
									{{--<div class="recent-work-inner">--}}
										{{--<h3><a href="#">Business theme</a></h3>--}}
										{{--<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>--}}
										{{--<a class="preview" href="{{asset('front/images/portfolio/full/item7.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div><!--/.portfolio-item-->--}}

						{{--<div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">--}}
							{{--<div class="recent-work-wrap">--}}
								{{--<img class="img-responsive" src="{{asset('front/images/portfolio/recent/item8.png')}}" alt="">--}}
								{{--<div class="overlay">--}}
									{{--<div class="recent-work-inner">--}}
										{{--<h3><a href="#">Business theme</a></h3>--}}
										{{--<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>--}}
										{{--<a class="preview" href="{{asset('front/images/portfolio/full/item8.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div><!--/.portfolio-item-->--}}
					</div>
				</div>
			</div>
		</div>
	</section><!--/#portfolio-item-->


@endsection