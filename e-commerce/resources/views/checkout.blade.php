<!DOCTYPE HTML>
<html>
<head>
<title>New Shop a E-Commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!--css-->
<link href="{{ URL::asset('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{ URL::asset('public/js/jquery.min.js') }}"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="{{ URL::asset('public/js/main.js') }}"></script>
<!--search jQuery-->
<script src="{{ URL::asset('public/js/responsiveslides.min.js') }}"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="{{ URL::asset('public/js/bootstrap-3.1.1.min.js') }}"></script>
 <!-- cart -->
<script src="{{ URL::asset('public/js/simpleCart.min.js') }}"></script>
<!-- cart -->
  <!--start-rate-->
<script src="{{ URL::asset('public/js/jstarbox.js') }}"></script>
	<link rel="stylesheet" href="{{ URL::asset('public/css/jstarbox.css') }}" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
</head>
<body>
	<!--header-->
		@include('header')
		<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Checkout</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
			<div class="cart-items">
				<div class="container">
					 <h2>My Shopping Bag (3)</h2>
						<script>$(document).ready(function(c) {
							$('.close1').on('click', function(c){
								$('.cart-header').fadeOut('slow', function(c){
									$('.cart-header').remove();
								});
								});	  
							});
					   </script>
					 <div class="cart-header">
						 <div class="close1"> </div>
						 <div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									 <img src="images/p15.jpg" class="img-responsive" alt="">
								</div>
							   <div class="cart-item-info">
								<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
								<ul class="qty">
									<li><p>Min. order value:</p></li>
									<li><p>FREE delivery</p></li>
								</ul>
									 <div class="delivery">
									 <p>Service Charges : $10.00</p>
									 <span>Delivered in 1-1:30 hours</span>
									 <div class="clearfix"></div>
								</div>	
							   </div>
							   <div class="clearfix"></div>
													
						  </div>
					 </div>
					 <script>$(document).ready(function(c) {
							$('.close2').on('click', function(c){
									$('.cart-header2').fadeOut('slow', function(c){
								$('.cart-header2').remove();
							});
							});	  
							});
					 </script>
					<div class="cart-header2">
						 <div class="close2"> </div>
						  <div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									 <img src="images/s1.jpg" class="img-responsive" alt="">
								</div>
							   <div class="cart-item-info">
								<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
								<ul class="qty">
									<li><p>Min. order value:</p></li>
									<li><p>FREE delivery</p></li>
								</ul>
									 <div class="delivery">
									 <p>Service Charges : $10.00</p>
									 <span>Delivered in 1-1:30 hours</span>
									 <div class="clearfix"></div>
								</div>	
							   </div>
							   <div class="clearfix"></div>
													
						  </div>
					  </div>
					  <script>$(document).ready(function(c) {
							$('.close3').on('click', function(c){
									$('.cart-header3').fadeOut('slow', function(c){
								$('.cart-header3').remove();
							});
							});	  
							});
					 </script>
					<div class="cart-header3">
						 <div class="close3"> </div>
							<div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									 <img src="images/i7.jpg" class="img-responsive" alt="">
								</div>
							   <div class="cart-item-info">
								<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
								<ul class="qty">
									<li><p>Min. order value:</p></li>
									<li><p>FREE delivery</p></li>
								</ul>
									 <div class="delivery">
									 <p>Service Charges : $10.00</p>
									 <span>Delivered in 1-1:30 hours</span>
									 <div class="clearfix"></div>
								</div>	
							   </div>
							   <div class="clearfix"></div>
							</div>
					</div>		
				</div>
			</div>
	<!-- checkout -->	
		</div>
					<!---footer--->
					<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>About </h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>My Account</h4>
									<ul>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="registered.html"> Create Account </a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Information</h4>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="products.html">Products</a></li>
										<li><a href="codes.html">Short Codes</a></li>
										<li><a href="mail.html">Mail Us</a></li>
										<li><a href="products1.html">products1</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid foot">
									<h4>Contacts</h4>
									<ul>
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">E Comertown Rd, Westby, USA</a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1 599-033-5036</a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> example@mail.com</a></li>
										
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					<!---footer--->
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy; 2016 New Shop . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
							</div>
							<div class="copy-right">
								<img src="images/card.png" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				<!--copy-->
				
</body>
</html>