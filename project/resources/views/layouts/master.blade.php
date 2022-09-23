<!DOCTYPE html>
<html lang="en">


<head>
<title>AwoofMart Food</title><meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />

{{-- <link href="{{ asset('assets/javascript/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" /> --}}
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<link href='https://fonts.googleapis.com/css?family=Work+Sans:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<link href="{{ asset('assets/css/stylesheet.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">
<link href="{{ asset('assets/javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{ asset('assets/javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet" media="screen" />
<script src="{{ asset('assets/javascript/jquery-2.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/javascript/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/template_js/jstree.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/template_js/template.js')}}"></script>
<script src="{{ asset('assets/javascript/common.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/javascript/global.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/javascript/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="preloader loader" style="display: block;"> <img src="{{ asset('assets/image/loader.gif')}}"  alt="#"/></div>
<header class="">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="top-left pull-left">
                        {{-- <div class="language">
                            <form action="#" method="post" enctype="multipart/form-data" id="language">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="image/flags/gb.png" alt="English" title="English"> <i class="fa fa-caret-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><img src="{{ asset('assets/image/flags/lb.png')}}" alt="Arabic" title="Arabic"> Arabic</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/image/flags/gb.png')}}" alt="English" title="English"> English</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div> --}}
                        {{-- <div class="currency">
                            <form action="#" method="post" enctype="multipart/form-data" id="currency">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>$</strong> <i class="fa fa-caret-down"></i> </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                    <div class="top-right pull-right">
                        <div id="top-links" class="nav pull-right">
                            <ul class="list-inline">
                                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span>My Account</span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i> <span>Wish List</span><span> (0)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-inner">
            <div class="col-sm-4 col-xs-6 header-left">
                <div class="shipping">
                    <div class="shipping-img"></div>
                    <div class="shipping-text text-white">+234700000000000<span class="shipping-detail text-white"> From 9:00am To 7:00pm</span></div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 header-middle">
                <div class="header-middle-top">
                    <div id="logo"> 
                        <a href="">
                            {{-- <img src="{{ asset('assets/image/logo.png')}}" title="E-Commerce" alt="E-Commerce" class="img-responsive" /> --}}
                            <h1 class="text-white">AwoofBukka</h1>
                        </a> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 header-right">
                <div id="cart" class="btn-group btn-block">
                    <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"><span id="cart-total" class="text-white">1 item(s) - $254.00</span><i class="fa fa-caret-down text-white"></i></button>
                    <ul class="dropdown-menu pull-right cart-dropdown-menu">
                        <li>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="{{ asset('assets/image/product/7product50x59.jpg')}}"></a></td>
                                        <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                                        <td class="text-right">x 1</td>
                                        <td class="text-right">$254.00</td>
                                        <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-right"><strong>Sub-Total</strong></td>
                                            <td class="text-right">$210.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                            <td class="text-right">$2.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>VAT (20%)</strong></td>
                                            <td class="text-right">$42.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Total</strong></td>
                                            <td class="text-right">$254.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-right"> <span class="btn-viewcart"><a href="cart.html"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="checkout.html"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="search" class="input-group">
                    <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                    </span> </div>
            </div>
        </div>
    </div>
</header>
<nav id="menu" class="navbar">
    <div class="nav-inner container">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
            <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
            <ul class="main-navigation">
                <li><a href="index-2.html"   class="parent"  >Home</a> </li>
                <li><a href="blog.html" class="parent"  >Blog</a></li>
                <li><a href="about-us.html" >About us</a></li>
                <li><a href="contact.html" >Contact Us</a> </li>
            </ul>
        </div>
    </div>
</nav>



    {{-- Dynamic Content --}}


    @yield('content')


    {{-- Dynamic Content --}}




<footer>
    <div class="container">
    	<div class="row">
        	<div class="footer-top-cms">
            <div class="col-sm-7">
                    <div class="newslatter">
                        <form>
                            <h5>Newsletter</h5>
                            <div class="input-group">
                                <input type="text" class=" form-control" placeholder="Email Here......">
                                <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="col-sm-5">
            <div class="footer-social">
                <h5>Social</h5>
                <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-4 footer-block">
                <h5 class="footer-title">Information</h5>
                <ul class="list-unstyled ul-wrapper">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="checkout.html">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="col-sm-4 footer-block">
                <h5 class="footer-title">Customer Service</h5>
                <ul class="list-unstyled ul-wrapper">
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Wish List</a></li>
                </ul>
            </div>
            <div class="col-sm-4 footer-block">
                <h5 class="footer-title">Extras</h5>
                <ul class="list-unstyled ul-wrapper">
                    <li><a href="#">Brands</a></li>
                    <li><a href="gift.html">Gift Vouchers</a></li>
                    <li><a href="affiliate.html">Affiliates</a></li>
                    <li><a href="#">Specials</a></li>
                </ul>
            </div>
           
        </div>
    </div>
    <a id="scrollup">Scroll</a> </footer>
<div class="footer-bottom">
    <div class="container">
        <div class="copyright">AwoofBukka &copy;2020 </a> </div>
        <div class="footer-bottom-cms">
            <div class="footer-payment">
                <ul>
                    <li class="mastero"><a href="#"><img alt="" src="{{ asset('assets/image/payment/mastero.jpg')}}"></a></li>
                    <li class="visa"><a href="#"><img alt="" src="{{ asset('assets/image/payment/visa.jpg')}}"></a></li>
                    <li class="currus"><a href="#"><img alt="" src="{{ asset('assets/image/payment/currus.jpg')}}"></a></li>
                    <li class="discover"><a href="#"><img alt="" src="{{ asset('assets/image/payment/discover.jpg')}}"></a></li>
                    <li class="bank"><a href="#"><img alt="" src="{{ asset('assets/image/payment/bank.jpg')}}"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script>
	//Dynamic Area Select
	$('body').on('change','#city', function(){
			var city = $('#city').val();
			//alert(city);
			 if(city != '')
			 {
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
				 //alert("Hi");
				$.ajax({
					url:"{{ url('/getareas') }}",
					method:"POST",
					data:{city:city},
					dataType:"json",
					success:function(data)
					{
						//alert(data);
					   	$('#area').html(data.areas);
					},
					error: function(xhr, textStatus, errorThrown) {
					//code to execut
					alert(xhr.responseText);
					//$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
					},
                });
				
			 }
			// else
			// {
			// 	$('#areaname').html('<option value="">Select Area</option>');
			// }

		});
</script>



</body>


</html>
