<!DOCTYPE html>
<html lang="en">
<?php $settings = \App\Setting::first(); ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Everest Souvenir House</title>

	<!-- Bootstrap -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
{{--	<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">--}}
	<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/jquery.bxslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('front/css/isotope.css')}}" media="screen" />
	<link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('front/js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
	<link href="{{asset('front/css/prettyPhoto.css')}}" rel="stylesheet" />
	<link href="{{asset('front/css/style.css')}}" rel="stylesheet" />
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<style>
		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 3px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {background-color: #ddd;}

		.dropdown:hover .dropdown-content {display: block;}

		.dropdown:hover .dropbtn {background-color: white;}
		.sub-dropdown-content {
			display: none;
			position: relative;
			background-color: #f1f1f1;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.sub-dropdown-content a {
			color: black;
			padding: 3px 16px;
			text-decoration: none;
			display: block;
		}

		.product-text{
			color:black;
		}

		.sub-dropdown-content a:hover {background-color: #ddd;}

		.subdropdown:hover .sub-dropdown-content {display: none;}

		.subdropdown:hover .subdropbtn {background-color: #3e8e41;}
		.list-group-item{
			margin-bottom: -7px !important;
		}
	</style>


</head>
<body>
<header>
	{{--<div id="google_translate_element" style="height:15%"></div>--}}
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="background: burlywood;">
		<div class="navigation" style="background: burlywood;">
			<div class="container" >
				<div class="navbar-header" style="padding-bottom:10%">
					<div class="navbar-brand">
						<a class="pull-right" href="{{url('/')}}"><img height="130" width="140" style="margin-bottom:-30px;" src="{{url('/front/ESH1.jpg')}}"></a>
					</div>
					<div class="navbar-brand" style="margin-left:16%">
						<a class="pull-right" href="{{url('/')}}">
							<h3 style="color:darkblue;font-weight: 700" class="pull-right"><span>E</span>verest Souvenir House</h3></a>
					</div>
				</div>

					<div class="menu" style="padding-bottom: 25px;">
						<ul class="nav nav-tabs" role="tablist">
							<li class="dropdown" role="presentation"><a href="{{url('/')}}" @if(Request::segment(1) == '')class="active" @endif>Home</a></li>
							<li class="dropdown" role="presentation"><a href="{{url('/aboutus')}}" @if(Request::segment(1) == 'services')class="active" @endif>About Us</a></li>
							<li class="dropdown" role="presentation">
								<a class="dropbtn" id="product-link" href="#" @if(Request::segment(1) == 'contact')class="active" @endif>
									Product
								</a>
								<div class="dropdown-content" style="width: 150%;">
                                    <?php $categories = \App\Category::where('cat_id',0)->get();
                                    $cat_ids = \App\Category::pluck('cat_id')->toarray();
                                    ?>
									@foreach($categories as $key=>$cat)
										<a class="subdropdown" data-id="{{$cat->id}}" @if(in_array($cat->id, $cat_ids)) href="javascript:void(0)" @else href="{{url('/products/'.$cat->id)}}" @endif>{{$cat->title}}@if(in_array($cat->id, $cat_ids))<span class="fa fa-plus pull-right" style="margin-top: 5%;"></span>@endif</a>
										<div  class="sub-dropdown-content-{{$cat->id}} sub-dropdown-content" style="position: absolute; left: 175px; top: <?php echo $key * 6 ; ?>%;">
                                            <?php $subcategories = \App\Category::where('cat_id',$cat->id)->get(); ?>
											@foreach($subcategories as $subcat)
												<a href="{{url('/products/'.$subcat->id)}}">{{$subcat->title}}</a>
											@endforeach
										</div>
									@endforeach
								</div>
							</li>
							<li class="dropdown" role="presentation"><a href="{{url('/latestproducts')}}" @if(Request::segment(1) == 'latestproducts')class="active" @endif>Latest Products</a></li>
							<li class="dropdown" role="presentation"><a href="{{url('/contact')}}" @if(Request::segment(1) == 'contact')class="active" @endif>Contact</a></li>
						</ul>
				</div>
		</div>
		</div>
	</nav>
</header>
@yield('content')

<footer>
	<div class="footer">
		<div class="container">
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
				<h3>CONTACT INFO</h3>
				<ul>
					<li><i class="fa fa-home fa-2x"></i>#Office {{$settings->address}}</li><hr>
					<li><i class="fa fa-phone fa-2x"></i> {{$settings->mobile_number}}</li><hr>
					<li><i class="fa fa-phone fa-2x"></i> {{$settings->contact_number}}</li><hr>
					<li><i class="fa fa-envelope fa-2x"></i> {{$settings->email}}</li>
				</ul>
			</div>
			<div class="col-md-4 wow fadeInUp pull-right" data-wow-offset="0" data-wow-delay="0.6s">
				<h3>Connect us with</h3>
				<ul>
					<li>Viber , whatsapp, wechat with  {{$settings->mobile_number}}</li><hr>
					<li>WE CHAT scanner code<img height="130" width="140" style="margin-bottom:-30px;" src="{{url('/front/qr.jpg')}}"></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="sub-footer">
		<div class="container">
			<div class="row">
				{{--<div class="col-md-6">--}}
					{{--&copy; 2015 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">bootstraptaste</a>. All Rights Reserved.--}}
				{{--</div>--}}
				<!--
                    All links in the footer should remain intact.
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Multi
                -->
				<div class="col-md-6">
					<ul class="pull-right">
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/aboutus')}}">About us</a></li>
						<li><a href="{{url('/latestproducts')}}">Latest Products</a></li>
						<li><a href="{{url('/contact')}}">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('front/js/jquery-2.1.1.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script src="{{asset('front/js/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('front/js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('front/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('front/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('front/js/functions.js')}}"></script>
<script>
    wow = new WOW(
        {

        }	)
        .init();
</script>
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }
</script>
<script>
	$(".subdropdown").click(function(){
	   var id = $(this).data('id');
	   if ($(".sub-dropdown-content-"+id).is(":visible")){
           $(".sub-dropdown-content-"+id).hide();
       } else{
           $(".sub-dropdown-content-"+id).show();
       }
	});
</script>
<script>
    $("#product-link").click(function(){
        $("#product-link").addClass('hover');
	});
</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    $(window).on("scroll", function() {
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();
        if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
            // when scroll to bottom of the page
        }
    });
</script>
<?php $settings = \App\Setting::first();

?>
</body>
</html>