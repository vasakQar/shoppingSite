@extends('layouts.shop.main')

@section('styles')

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/simple-line-icons.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revslider.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mobile-menu.css')}}">

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
                <div class="col-sm-12 col-xs-12">
                    <article class="col-main">
                        <div class="account-login">
                            <div class="page-title">
                                <h2>Login or Create an Account</h2>
                            </div>
                            <fieldset class="col2-set">
                                <div class="col-1 new-users"><strong>New Customers</strong>
                                    <div class="content">
                                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                        <div class="buttons-set">
                                            <button onclick="window.location='http://demo.magentomagik.com/computerstore/customer/account/create/';" class="button create-account" type="button"><span>Create an Account</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 registered-users"><strong>Registered Customers</strong>
                                    <div class="content">
                                        <p>If you have an account with us, please log in.</p>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                        <ul class="form-list">
                                            <li>
                                                <label for="email">{{ __('E-Mail Address') }}<span class="required">*</span></label>
                                                <input id="email" type="email" class="input-text required-entry @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')--}}
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </li>
                                            <li>
                                                <label for="password">{{ __('Password') }} <span class="required">*</span></label>
                                                <input type="password" title="Password" id="password" class="input-text required-entry validate-password @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </li>
                                        </ul>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        <div class="buttons-set">
                                            <button type="submit" class="button login">
                                                {{ __('Login') }}
                                            </button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </fieldset>
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
<script type="text/javascript" src="{{asset('js/revslider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/common.js')}}"></script>

<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobile-menu.min.js')}}"></script>
@endsection
