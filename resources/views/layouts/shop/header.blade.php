<!-- Header -->
<header>
    <div class="header-container">
        <div class="container">
            <div class="row">
                <!-- Header Language -->
                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 pull-left">
                    <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="{{asset('images/english.png')}}" alt="language"> English <span class="caret"></span> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"> <a href="/lang/en"><img src="{{asset('images/english.png')}}" alt="language"> English </a> </li>
                            <li role="presentation"> <a href="/lang/am"><img src="{{asset('images/armenia.png')}}" alt="language" style="width: 16px;"> Armenian </a> </li>
                            <li role="presentation"> <a href="/lang/ru"><img src="{{asset('images/russia.png')}}" alt="language" style="width: 16px;"> Russian </a> </li>
                        </ul>
                    </div>
                    <!-- End Header Language -->
                    <!-- Header Currency -->
                    <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#"> $ - USD </a> </li>
                            <li role="presentation"><a href="#"> ֏ - AMD </a> </li>
                            <li role="presentation"><a href="#"> € - EUR </a> </li>
                            <li role="presentation"><a href="#"> ₽ - RUR </a> </li>
                        </ul>
                    </div>
                    <!-- End Header Currency -->
                    {{--                        <div class="welcome-msg"> Default welcome msg! </div>--}}
                </div>
                <!-- Header Top Links -->
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-right hidden-xs">
                    <div class="toplinks">
                        <div class="links">
                            <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a> </div>
                            <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a> </div>
                            <div class="check"><a title="Checkout" href="{{ route('products.wish.list') }}"><span class="hidden-xs">Wishlist</span></a> </div>
                        <!-- Header Company -->
                            <div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle" href="#"> Company <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li role="presentation"><a href="about_us.html"> About Us </a> </li>
                                    <li role="presentation"><a href="#"> Customer Service </a> </li>
                                    <li role="presentation"><a href="#"> Privacy Policy </a> </li>
                                    <li role="presentation"><a href="sitemap.html">Site Map </a> </li>
                                </ul>
                            </div>
                            <!-- End Header Company -->
                            <div class="login">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endif

                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                @else
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                            </div>
{{--                            <div class="login"><a href="{{ route('login') }}"><span class="hidden-xs">Login</span></a> </div>--}}
                        </div>
                    </div>
                    <!-- End Header Top Links -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block">
                <!-- Header Logo -->
                <div class="logo">
                    <a title="Qualis" href="{{ route('shop.index', app()->getLocale() ) }}">
                        <img alt="Qualis" src="{{asset('images/logo.png')}}">
                    </a>
                    <h1>{{ trans('lang.Qualis')}}</h1>
                    {{ trans('lang.Qualis')}}
                </div>
                <!-- End Header Logo -->
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
                <div class="contact-row">
                    <div class="phone inline">
                        <i class="fa fa-phone"></i> +{{$headerInfo[0]->phone}}
                    </div>
                    <div class="contact inline">
                        <i class="fa fa-envelope"></i><span class="le-color">{{$headerInfo[0]->email}}</span>
                    </div>
                </div>
                <div class="search-box">
                    <form id="search_mini_form" action="#" method="get">
                        <!-- Autocomplete End code -->
                        <input id="search" type="text" name="q" value="Search entire store here..." class="searchbox" maxlength="128">
                        <ul class="categories-filter animate-dropdown">
                            <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu" style="max-height: 200px;overflow: scroll;overflow-x: hidden;">
                                    <li class="menu-header">{{$categories[0]->name_en}}</li>
                                    @foreach($categories as $category)
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- {{$category->name_en}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        <button type="submit" title="Search" class="search-btn-bg" id="submit-button"></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">
                <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                </div>
                <div class="top-cart-contain">
                    <!-- Top Cart -->
                    <div class="mini-cart">
                        <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="{{ route('shop.shopping.cart') }}"><span>Shopping Cart</span> <span class="cart_count">2</span>
                                <div class="price">$4580</div>
                            </a> </div>
                        <div>
                            <div class="top-cart-content">
                                <!--block-subtitle-->
                                <ul class="mini-products-list" id="cart-sidebar">
                                    <li class="item first">
                                        <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="#l"><img alt="Retis lapen casen" src="{{asset('products-images/product6.jpg')}}"> </a>
                                            <div class="product-details">
                                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a>  </div>
                                                <p class="product-name"><a href="#">Elegant Men Bandage Black Dresses</a> </p>
                                                1 x <span class="price">$179.99</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item last">
                                        <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"><img alt="Retis lapen casen" src="{{asset('products-images/product3.jpg')}}"> </a>
                                            <div class="product-details">
                                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a>  </div>
                                                <p class="product-name"><a href="#">Black Mirror Full Rim Aviator Shape Sunglasses</a> </p>
                                                1 x <span class="price">$80.00</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!--actions-->
                                <div class="actions">
                                    <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span> </button>
                                    <a href="shopping-cart" class="view-cart"><span>View Cart</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Top Cart -->
                    <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
                        <input value="" type="hidden">
                        <input id="enable_module" value="1" type="hidden">
                        <input class="effect_to_cart" value="1" type="hidden">
                        <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                    </div>
                </div>
                <!-- thm wishlist -->
            </div>
        </div>
    </div>
    <nav class="hidden-xs">
        <div class="nav-container">
            <div class="col-md-3 col-xs-12 col-sm-3">
                <div class="mega-container visible-lg visible-md visible-sm">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3><i class="fa fa-navicon"></i> All Categories</h3>
                        </div>
                        <div class="mega-menu-category">
                            <ul class="nav" style="max-height: 460px;overflow: scroll;overflow-x: hidden;">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i> {{$category->name_en}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features box -->
            <div class="our-features-box hidden-xs">
                <div class="features-block">
                    <div class="col-lg-9 col-md-9 col-xs-12 col-sm-9 offer-block">
                        <a href="{{ route('product.list',['data' => 'NewArrivals','type' => 'list']) }}">{{__('New Arrivals')}}</a>
                        <a href="{{ route('product.list',['data' => 'Special','type' => 'list']) }}">{{__('Special')}}</a>
                        <a href="{{ route('product.list',['data' => 'TodaysDeals','type' => 'list']) }}">Todays Deals</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- end header -->
