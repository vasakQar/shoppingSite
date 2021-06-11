@extends('layouts.shop.main')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/simple-line-icons.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mobile-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revslider.css')}}">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet">
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- Slider -->
            <div class="home-slider5">
                <div id="thmg-slideshow" class="thmg-slideshow">
                    <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                            <ul>
                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{asset('images/slide-img1.jpg')}}"><img src="{{asset('images/slide-img1.jpg')}}"  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>

                                    <div class="container">
                                        <div class="content_slideshow">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                                                <div class="col-lg-9 col-sm-9 col-md-9">
                                                    <div class="info">
                                                        <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Brands 2018</span> </div>
                                                        <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> incredible </div>
                                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{asset('images/slide-img2.jpg')}}"><img src="{{asset('images/slide-img2.jpg')}}"  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                    <div class="container">
                                        <div class="content_slideshow">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                                                <div class="col-lg-9 col-sm-9 col-md-9">
                                                    <div class="info">
                                                        <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Brands 2018</span> </div>
                                                        <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> Decorative </div>
                                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-element container">
        <div class="row">
            <div class="large-6">
                <div class="wpb_wrapper">
                    <div class="banner">
                        <div class="banner-content">
                            <h4>Modern Collection</h4>
                            <h5>Sale upto 50% off </h5>
                            <a href="" class="readmore-link">Read more <i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                        <div class="banner-img">
                            <a href="#"><img src="{{asset('images/banner1.jpg')}}" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="nasa-col large-6 columns desktop-padding-left-5  vc_">
                <div class="wpb_wrapper">
                    <div class="large-6">
                        <div class="wpb_wrapper">

                            <div class="banner" style="border: 1px solid #e8c506;">
                                <div class="banner-content1">
                                    <h6 style="color: #df3737;">"Shop123"</h6>
                                    <h3>Use Promo Code</h3>
                                    <p>Get Upto 20% Off</p>
                                </div>
                                <div class="banner-img">
                                    <a href="#"><img src="http://elessi.nasatheme.com/wp-content/uploads/2018/05/h2-banner-white.jpg')}}" alt=""> </a>
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="large-6">
                        <div class="wpb_wrapper">
                            <div class="banner">
                                <div class="banner-img">
                                    <a href="#">
                                        <img src="{{asset('images/banner2.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row margin-top-5">
                    <div class="large-12">
                        <div class="wpb_wrapper">
                            <div class="banner">
                                <div class="banner-content">

                                    <h4>Decorative</h4>
                                    <h5>Now starting at $99</h5>
                                    <a href="" class="readmore-link">Read more <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                                <div class="banner-img">
                                    <a href="#">
                                        <img src="{{asset('images/banner3.jpg')}}" alt="">

                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-page">

            <!-- featured category -->
            <div class="category-product">
                <div class="navbar nav-menu">
                    <div class="navbar-collapse">
                        <h1>Trending</h1>
                        <ul class="nav navbar-nav">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Hot Products</a></li>
                            <li class=" "><a data-toggle="tab" href="#tab-2">New Arrivals</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3" class="active">Todays Deals</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <div class="product-bestseller">
                    <div class="product-bestseller-content">
                        <div class="product-bestseller-list">
                            <div class="tab-container">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-1">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" href="{{ route('shop.product.detail') }}"> <img alt="" src="{{asset('products-images/product24.jpg')}}"> </a>
                                                            <div class="sale-label sale-top-right">- 40%</div>
                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
{{--                                                                   --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a href="product_detail.html"> Elegant Men Bandage Black Dresses</a> </div>
                                                            <div class="brand">Datsun</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="{{asset('products-images/product5.jpg')}}"> </a>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
{{--                                                                   --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a href="product_detail.html"> Bacca Bucci Men's Running Shoes </a> </div>
                                                            <div class="brand">Xperia</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span>  <span class="old-price"><span class="price">$199.00</span></span></div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="{{asset('products-images/product23.jpg')}}"> </a>
                                                            <div class="new-label new-top-left">new</div>
                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
{{--                                                                   --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a href="product_detail.html">Black Mirror Full Rim Aviator Shape Sunglasses</a> </div>
                                                            <div class="brand">Sunproto</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>

                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="{{asset('products-images/product17.jpg')}}"> </a>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
{{--                                                                   --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a href="product_detail.html"> Impulse Climate Proof Mountain Rucksack </a> </div>
                                                            <div class="brand">Impulse</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <!-- tab product -->
                                <div class="tab-panel " id="tab-2">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="{{asset('products-images/product17.jpg')}}"> </a>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a href="product_detail.html"> Impulse Climate Proof Mountain Rucksack </a> </div>
                                                            <div class="brand">Impulse</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="{{asset('products-images/product15.jpg')}}"> </a>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a href="product_detail.html"> Lavie Roma Women's grey Clutch Bags </a> </div>
                                                            <div class="brand">Livia</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="{{asset('products-images/product12.jpg')}}"> </a>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a href="product_detail.html">Silk Flared Full Length Pink Women's Skirt</a> </div>
                                                            <div class="brand">Just Wow</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel " id="tab-3">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product16.jpg')}}"> </a>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Lifestyle Stainless Steel Flask, 1000ml</a> </div>
                                                            <div class="brand">Cello</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product13.jpg')}}"> </a>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Women Casual Stylish Latest Daily wear </a> </div>
                                                            <div class="brand">Shreeji Ethnic</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product14.jpg')}}"> </a>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                                    <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Zacharias Mens & Women Printed Fedora Hat</a> </div>
                                                            <div class="brand">Zacharias</div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Item inner-->
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="bestsell-pro">
            <div>
                <div class="slider-items-products">
                    <div class="bestsell-block">
                        <div class="block-title">
                            <h2>Best Sellers</h2>
                        </div>
                        <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4 products-grid block-content">
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product14.jpg')}}"> </a>
                                                <div class="new-label new-top-left">new</div>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                        <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Cotton Honeycomb Hamam Bath Towel</a> </div>
                                                <div class="brand">Linen</div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:80%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product21.jpg')}}"> </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                        <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Golden Black Brown Full Rim Aviator Shape</a> </div>
                                                <div class="brand">Vincent</div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:80%" class="rating"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product11.jpg')}}"> </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                        <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Silk Flared Full Length Pink Women's Skirt</a> </div>
                                                <div class="brand">justrin</div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:80%" class="rating"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="item">

                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product12.jpg')}}"> </a>
                                                <div class="new-label new-top-left">new</div>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                        <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Lifestyle Stainless Steel Flask, 1000ml</a> </div>
                                                <div class="brand">Cello</div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:80%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product10.jpg')}}"> </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                        <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Zacharias Mens &amp; Women Printed Fedora Hat</a> </div>
                                                <div class="brand">Zacharias</div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:80%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product16.jpg')}}"> </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                        <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Lifestyle Stainless Steel Flask, 1000ml</a> </div>
                                                <div class="brand">Cello</div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:80%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('products-images/product19.jpg')}}"> </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{ route('quick.view') }}"></a> </li>
                                                        <li><a class="link-wishlist" href="{{ route('products.wishlist') }}"></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Cotton Honeycomb Hamam Bath Towel</a> </div>
                                                <div class="brand">Linen</div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:80%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<!-- JavaScript -->
@section('scripts')

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/revslider.js')}}"></script>
    <script src="{{asset('js/common.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.mobile-menu.min.js')}}"></script>
    <script src="{{asset('js/countdown.js')}}"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1170,
                startheight:495,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
    </script>
    <!-- Hot Deals Timer 1-->
    <script>
        var dthen1 = new Date("12/25/17 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);
    </script>

@endsection

