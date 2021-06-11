<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicons Icon -->
    <link rel="icon" href="#" type="image/x-icon" />
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <title>Qualis premium HTML5 &amp; CSS3 template</title>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS Style -->
    @yield('styles')

</head>
<body class="cms-index-index cms-home-page">
    <div id="page">
        @include('layouts.shop.header')

        @yield('content')

        @include('layouts.shop.footer')
    </div>
    @include('layouts.shop.mobile_menu')

    @yield('scripts')
</body>
</html>
