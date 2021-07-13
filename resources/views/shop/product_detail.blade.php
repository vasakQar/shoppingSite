@extends('layouts.shop.main')

@section('styles')

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/simple-line-icons.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mobile-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revslider.css')}}" >
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet">
@endsection

@section('content')

    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="container">
            <div class="row">

                <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
                        <li class="category1599"> <a href="grid.html" title="">Women</a> <span>/ </span> </li>
                        <li class="category1600"> <a href="grid.html" title="">Styliest Bag</a> <span>/</span> </li>
                        <li class="category1601"> <strong>Clutch Handbags</strong> </li>
                    </ul>
                </div>
                <!-- Breadcrumbs End -->

                <div class="col-sm-12 col-xs-12">



                    <article class="col-main">
                        <div class="product-view">
                            <div class="product-essential">
                                <form action="#" method="post" id="product_addtocart_form">
                                    <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                    <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                                        <div class="new-label new-top-left"> New </div>
                                        <div class="product-image">
                                            <div class="product-full"> <img id="product-zoom" src="{{ asset('storage/images')}}/{{($product->images)[0]}}" data-zoom-image="{{ asset('storage/images')}}/{{($product->images)[0]}}" alt="product-image"/> </div>
                                            <div class="more-views">
                                                <div class="slider-items-products">
                                                    <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                                                        <div class="slider-items slider-width-col4 block-content">
                                                            @foreach($product->images as $image)
                                                                <div class="more-views-items" id=""> <a href="#" data-image="products-images/product2.jpg')}}" data-zoom-image="products-images/product2.jpg')}}"> <img id="product-zoom0" class="itemImage"  src="{{ asset('storage/images')}}/{{$image}}" alt="product-image"/> </a></div>
                                                            @endforeach
                                                            <div class="more-views-items"> <a href="#" data-image="products-images/product3.jpg')}}" data-zoom-image="products-images/product3.jpg')}}"> <img id="product-zoom1"  src="{{asset('products-images/product3.jpg')}}" alt="product-image"/> </a></div>
                                                            <div class="more-views-items"> <a href="#" data-image="products-images/product4.jpg')}}" data-zoom-image="products-images/product4.jpg')}}"> <img id="product-zoom2"  src="{{asset('products-images/product4.jpg')}}" alt="product-image"/> </a></div>
                                                            <div class="more-views-items"> <a href="#" data-image="products-images/product5.jpg')}}" data-zoom-image="products-images/product5.jpg')}}"> <img id="product-zoom3"  src="{{asset('products-images/product5.jpg')}}" alt="product-image"/> </a> </div>
                                                            <div class="more-views-items"> <a href="#" data-image="products-images/product6.jpg')}}" data-zoom-image="products-images/product6.jpg')}}"> <img id="product-zoom4"  src="{{asset('products-images/product6.jpg')}}" alt="product-image" /> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end: more-images -->
                                    </div>
                                    <div class="product-shop col-lg- col-sm-7 col-xs-12">
                                        <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                                        <div class="brand">XPERIA</div>
                                        <div class="product-name">
                                            <h1>{{$product->name}}</h1>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:60%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                                        </div>
                                        <div class="price-block">
                                            <div class="price-box">
                                                <p class="availability in-stock"><span>In Stock</span></p>
                                                <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> ${{$product->price}} </span> </p>
                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ${{$product->old_price}} </span> </p>
                                            </div>
                                        </div>
                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <div class="pull-left">
                                                    <div class="custom pull-left">
                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                                    </div>
                                                </div>
                                                <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button">Add to Cart</button>
                                            </div>

                                        </div>
                                        <div class="short-description">
                                            <p>{{$product->description_en}}</p>
                                        </div>
                                        <div class="email-addto-box">
                                            <ul class="add-to-links">
                                                <li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>
                                                <li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>
                                            </ul>
                                            <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                                        </div>
                                        <div class="social">
                                            <ul class="link">
                                                <li class="fb"><a href="#"></a></li>
                                                <li class="tw"><a href="#"></a></li>
                                                <li class="googleplus"><a href="#"></a></li>
                                                <li class="rss"><a href="#"></a></li>
                                                <li class="pintrest"><a href="#"></a></li>
                                                <li class="linkedin"><a href="#"></a></li>
                                                <li class="youtube"><a href="#"></a></li>
                                            </ul>
                                        </div>

{{--                                        <ul class="shipping-pro">--}}
{{--                                            <li>Free Wordwide Shipping</li>--}}
{{--                                            <li>30 Days Return</li>--}}
{{--                                            <li>Member Discount</li>--}}
{{--                                        </ul>--}}
                                    </div>
                                </form>
                            </div>
                            <div class="product-collateral">
                                <div class="add_info">
                                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                        <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
{{--                                        <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>--}}
{{--                                        <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>--}}
{{--                                        <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>--}}
{{--                                        <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>--}}
                                    </ul>
                                    <div id="productTabContent" class="tab-content">
                                        <div class="tab-pane fade in active" id="product_tabs_description">
                                            <div class="std">
                                                <img alt="" src="{{ asset('storage/images')}}/{{($product->images)[0]}}" style="float:right;max-width: 280px;">
                                                <p>{{$product->description_en}}</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product_tabs_tags">
                                            <div class="box-collateral box-tags">
                                                <div class="tags">
                                                    <form id="addTagForm" action="#" method="get">
                                                        <div class="form-add-tags">
                                                            <label for="productTagName">Add Tags:</label>
                                                            <div class="input-box">
                                                                <input class="input-text" name="productTagName" id="productTagName" type="text">
                                                                <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                                                            </div>
                                                            <!--input-box-->
                                                        </div>
                                                    </form>
                                                </div>
                                                <!--tags-->
                                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="reviews_tabs">
                                            <div class="woocommerce-Reviews">
                                                <div>
                                                    <h2 class="woocommerce-Reviews-title">2 reviews for <span>Bacca Bucci Men's Running Shoes</span></h2>
                                                    <ol class="commentlist">
                                                        <li class="comment">
                                                            <div>
                                                                <img alt="" src="{{asset('images/member1.png')}}" class="avatar avatar-60 photo">
                                                                <div class="comment-text">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:100%" class="rating"></div>
                                                                        </div>

                                                                    </div>
                                                                    <p class="meta">
                                                                        <strong>John Doe</strong>
                                                                        <span>–</span> April 19, 2018
                                                                    </p>
                                                                    <div class="description"><p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                        <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li><!-- #comment-## -->
                                                        <li class="comment">
                                                            <div>
                                                                <img alt="" src="{{asset('images/member2.png')}}" class="avatar avatar-60 photo">
                                                                <div class="comment-text">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:100%" class="rating"></div>
                                                                        </div>

                                                                    </div>
                                                                    <p class="meta">
                                                                        <strong>Stephen Smith</strong> <span>–</span> June 02, 2018
                                                                    </p>
                                                                    <div class="description"><p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li><!-- #comment-## -->
                                                    </ol>
                                                </div>
                                                <div>
                                                    <div>
                                                        <div class="comment-respond">
                                                            <span class="comment-reply-title">Add a review </span>
                                                            <form action="#" method="post" class="comment-form" novalidate>
                                                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                                                <div class="comment-form-rating">
                                                                    <label id="rating">Your rating</label>
                                                                    <p class="stars">
                                                                        <span>
                                                                        <a class="star-1" href="#">1</a>
                                                                        <a class="star-2" href="#">2</a>
                                                                        <a class="star-3" href="#">3</a>
                                                                        <a class="star-4" href="#">4</a>
                                                                        <a class="star-5" href="#">5</a>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <p class="comment-form-comment">
                                                                    <label>Your review <span class="required">*</span></label>
                                                                    <textarea id="comment" name="comment" cols="45" rows="8"  required></textarea>
                                                                </p>
                                                                <p class="comment-form-author">
                                                                    <label for="author">Name <span class="required">*</span></label>
                                                                    <input id="author" name="author" type="text" value="" size="30" required></p>
                                                                <p class="comment-form-email">
                                                                    <label for="email">Email <span class="required">*</span></label>
                                                                    <input id="email" name="email" type="email" value="" size="30" required></p>
                                                                <p class="form-submit">
                                                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                </p>
                                                            </form>
                                                        </div><!-- #respond -->
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product_tabs_custom">
                                            <div class="product-tabs-content-inner clearfix">
                                                <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                          simply dummy text of the printing and typesetting industry. Lorem Ipsum
                          has been the industry's standard dummy text ever since the 1500s, when
                          an unknown printer took a galley of type and scrambled it to make a type
                          specimen book. It has survived not only five centuries, but also the
                          leap into electronic typesetting, remaining essentially unchanged. It
                          was popularised in the 1960s with the release of Letraset sheets
                          containing Lorem Ipsum passages, and more recently with desktop
                          publishing software like Aldus PageMaker including versions of Lorem
                          Ipsum.</span></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product_tabs_custom1">
                                            <div class="product-tabs-content-inner clearfix">
                                                <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing.  6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem

                          Lorem Ipsumis
                          simply dummy text of the printing and typesetting industry. Lorem Ipsum
                          has been the industry's standard dummy text ever since the 1500s, when
                          an unknown printer took a galley of type and scrambled it to make a type
                          specimen book. It has survived not only five centuries, but also the
                          leap into electronic typesetting, remaining essentially unchanged. It
                          was popularised in the 1960s with the release of Letraset sheets
                          containing Lorem Ipsum passages, and more recently with desktop
                          publishing software like Aldus PageMaker including versions of Lorem
                          Ipsum.</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Slider -->
                            <div class="related-pro">
                                <div class="slider-items-products">
                                    <div class="related-block">
                                        <div class="home-block-inner">
                                            <div class="block-title">
                                                <h2>Related Products</h2>
                                            </div>
                                        </div>
                                        <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                            <div class="slider-items slider-width-col4 products-grid block-content">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product16.jpg')}}"> </a>

                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
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
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product13.jpg')}}"> </a>

                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
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
                                                </div>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product14.jpg')}}"> </a>

                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
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
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product23.jpg')}}"> </a>
                                                                <div class="new-label new-top-left">new</div>
                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Bacca Bucci Men's Running Shoes </a> </div>
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
                                                </div>

                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product11.jpg')}}"> </a>
                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
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
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product17.jpg')}}"> </a>

                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Impulse Climate Proof Mountain Rucksack </a> </div>
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
                                                </div>
                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product12.jpg')}}"> </a>

                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Silk Flared Full Length Pink Women's Skirt</a> </div>
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
                                                </div>
                                                <!-- End Item -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End related products Slider -->

                            <!-- Upsell Product Slider -->
                            <div class="upsell-pro">
                                <div class="slider-items-products">
                                    <div class="upsell-block">
                                        <div class="home-block-inner">
                                            <div class="block-title">
                                                <h2>Upsell Product</h2>
                                            </div>
                                        </div>
                                        <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                                            <div class="slider-items slider-width-col4 products-grid block-content">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product17.jpg')}}"> </a>

                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Impulse Climate Proof Mountain Rucksack </a> </div>
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
                                                </div>

                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product15.jpg')}}"> </a>

                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Lavie Roma Women's grey Clutch Bags </a> </div>
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
                                                </div>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product12.jpg')}}"> </a>
                                                                <div class="sale-label sale-top-left">- 49% Sale</div>
                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Silk Flared Full Length Pink Women's Skirt</a> </div>
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
                                                </div>
                                                <!-- End Item -->

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product21.jpg')}}"> </a>

                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Black Mirror Full Rim Aviator Shape Sunglasses</a> </div>
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
                                                </div>

                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product24.jpg')}}"> </a>
                                                                <div class="new-label new-top-left">new</div>
                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Elegant Men Bandage Black Dresses</a> </div>
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
                                                </div>
                                                <!-- End Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product23.jpg')}}"> </a>
                                                                <div class="new-label new-top-left">new</div>
                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Bacca Bucci Men's Running Shoes </a> </div>
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
                                                </div>
                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('products-images/product11.jpg')}}"> </a>
                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                        <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                        <li><a class="link-compare" href="compare.html"></a> </li>
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

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Upsell  Slider -->
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>





            </div>
        </div>
    </section>
    <!-- Main Container End -->

@endsection

@section('scripts')
<!-- JavaScript -->
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/common.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobile-menu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cloud-zoom.js')}}"></script>
<script type="text/javascript">
    $(function () {
        $('.itemImage').on('click', function (){
            let src = $(this).attr('src');
            $('#product-zoom').attr('src',src);
            $('#product-zoom').data('zoom-image',src).elevateZoom({
                responsive: true,
                zoomType: "lens",
                containLensZoom: true
            });
        })
    });
</script>
@endsection
