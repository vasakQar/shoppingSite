<!-- Footer -->
<footer class="footer">

    <div class="newsletter-wrap">
        {{--            <div class="container">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-xs-12">--}}
        {{--                        <div class="newsletter">--}}
        {{--                            <form>--}}
        {{--                                <div>--}}
        {{--                                    <h4><span>Sign up to Newsletter</span></h4>--}}
        {{--                                    <input type="text" placeholder="Enter your email address" class="input-text" title="Sign up for our newsletter" id="newsletter1" name="email">--}}
        {{--                                    <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>--}}
        {{--                                </div>--}}
        {{--                            </form>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
    </div>
    <!--newsletter-->

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>Shopping Guide</h4>
                        <ul class="links">
                            {{--                                <li><a href="blog.html" title="How to buy">Blog</a></li>--}}
                            <li><a href="faq.html" title="FAQs">FAQs</a></li>
                            <li><a href="#" title="Payment">Payment</a></li>
                            <li><a href="#" title="Shipment">Shipment</a></li>
                            <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                            <li><a href="#" title="Return policy">Return policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>Style Advisor</h4>
                        <ul class="links">
                            <li><a href="login.html" title="Your Account">Your Account</a></li>
                            <li><a href="#" title="Information">Information</a></li>
                            <li><a href="#" title="Addresses">Addresses</a></li>
                            <li><a href="#" title="Addresses">Discount</a></li>
                            <li><a href="#" title="Orders History">Orders History</a></li>
                            <li><a href="#" title="Order Tracking">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>Information</h4>
                        <ul class="links">
                            <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                            {{--                                <li><a href="#" title="Search Terms">Search Terms</a></li>--}}
                            <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                            <li><a href="about_us.html" title="About Us">About Us</a></li>
                            <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                            <li><a href="#" title="Suppliers">Suppliers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Contact Us</h4>
                    <div class="contacts-info">
                        <address><i class="add-icon"></i>{{$contact[0]->address}}<br>
                        </address>
                        <div class="phone-footer"><i class="phone-icon"></i>+ {{$contact[0]->phone}}</div>
                        <div class="email-footer"><i class="email-icon"></i><a href="mailto:abc@example.com">{{$contact[0]->email}}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="social">
                        <ul>
                            <li class="fb"><a href="{{$socialSites[0]->facebook}}"></a></li>
                            <li class="tw"><a href="{{$socialSites[0]->twitter}}"></a></li>
                            <li class="googleplus"><a href="{{$socialSites[0]->googleplus}}"></a></li>
                            <li class="rss"><a href="{{$socialSites[0]->rss}}"></a></li>
                            <li class="pintrest"><a href="{{$socialSites[0]->pintrest}}"></a></li>
                            <li class="linkedin"><a href="{{$socialSites[0]->linkedin}}"></a></li>
                            <li class="youtube"><a href="{{$socialSites[0]->youtube}}"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 coppyright">
                    &copy; 2018 ThemesGround. All Rights Reserved.
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="payment-accept"> <img src="{{asset('images/payment-1.png')}}" alt=""> <img src="{{asset('images/payment-2.png')}}" alt=""> <img src="{{asset('images/payment-3.png')}}" alt=""> <img src="{{asset('images/payment-4.png')}}" alt=""> </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->
