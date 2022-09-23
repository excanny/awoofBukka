@extends('layouts.master')

@section('content')


<div class="mainbanner">
    <div id="main-banner" class="owl-carousel home-slider">
        <div class="item"> <a href="#"><img src="{{ asset('assets/image/banners/fastfood.jpg')}}" alt="main-banner1" class="img-responsive" /></a> </div>
        <div class="item"> <a href="#"><img src="{{ asset('assets/image/banners/restaurantb.jpg')}}" alt="main-banner2" class="img-responsive" /></a> </div>
        <div class="item"> <a href="#"><img src="{{ asset('assets/image/banners/bukkab.jpg')}}" alt="main-banner3" class="img-responsive" /></a> </div>
    </div>

</div>
<div class="container">

    <div class="row" id="order-now">
        <div class="col-sm-12 text-center">
            <h1 id="order-now-title">Order Now, Get It Now!</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <h2>Delivery Location</h2>
        </div>
    </div>

<div class="row">
    <div id="content" class="col-sm-12">
        <div class="row">

            

            <div class="col-sm-3">
                <label for="">Choose City</label>
                <select name="" id="city" class="form-control" required>
                    <option value="">Select one</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->fcity_name }}">{{ $city->fcity_name }}</option>
                    @endforeach
                </select>

            </div> 
            
            <div class="col-sm-3">

                <label for="">Choose Area</label>
                <select name="" id="area" class="form-control" required>
                
                </select>

            </div> 

           
        </div>

        <br>
        <br>


<hr>



    <div class="row" id="service-title">
        <div class="col-sm-12">
            <h2>Select Service</h2>
        </div>
    </div>

        <div class="row">
            <div class="cms_banner">
                <div class="col-md-4 cms-banner-left text-center" disabled style="border:12px solid black;"> 
                    <a disabled href="javascript:void;">
                        <i class="fas fa-hamburger fa-7x"></i>
                        <h2>Fast Foods</h2>
                        <p>Quick tasty snacks</p>
                    </a> 
                </div>
                <div class="col-md-4 cms-banner-middle text-center" style="border:12px solid black;"> 
                    <a disabled href="{{url('/restaurants')}}">
                        <i class="fas fa-utensils fa-7x"></i>
                        <h2>Restaurants</h2>
                        <p>Places to full meals, home away from home</p>
                    </a> 
                </div>
                <div class="col-md-4 cms-banner-right text-center" style="border:12px solid black;"> 
                    <a disabled href="javascript:void;">
                    
                    <i class="fas fa-pepper-hot fa-7x"></i>
                        <h2>Bukkas</h2>
                        <p>Local meals, a taste of nigerian local culture</p>
                </a> 
            </div>
            </div>
        </div>


        <br>

    </div>

</div>

</div>
        <div class="container-fluid" id="how-it-works">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="text-white">How it Works</h1>
                    </div>
                </div>

                <br>
                <br>

                <div class="row">
                    <div class="col-sm-4 text-center">
                        <i class="fas fa-map-marker-alt fa-5x"></i>
                        <br>
                        <br>
                        <h2>Select Delivery Location </h2>
                    <p> Select city and area where you want the delivery</p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <i class="fas fa-shopping-cart fa-5x"></i>
                        <br>
                        <br>
                        <h2>Shop For Food Items </h2>
                    <p> Browse shops that deliver to your area</p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <i class="fas fa-motorcycle fa-5x"></i>
                        <br>
                        <br>
                        <h2>We Deliver To Your Doorstep </h2>
                    <p> Fast Delivery Of Your Order</p>
                    </div>
                </div>

    </div>

    <div id="partners">
        <h1 class="text-center">Our Partners</h1>
    </div>
   

    <div id="brand_carouse" class="owl-carousel brand-logo">
        
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand1.png')}}" alt="Disney" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand2.png')}}" alt="Dell" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand3.png')}}" alt="Harley" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand4.png')}}" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand5.png')}}" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand6.png')}}" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand7.png')}}" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand8.png')}}" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand9.png')}}" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="{{ asset('assets/image/brand/brand5.png')}}" alt="Canon" class="img-responsive" /></a> </div>
    </div>






@stop