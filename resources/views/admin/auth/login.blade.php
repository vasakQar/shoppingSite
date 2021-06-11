<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Login</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">CamLike</h1>

        </div>
        <h3>Welcome to Admin page</h3>

        <p>Login in. To see it in action.</p>
        <form class="m-t" method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}"  name="password" required autocomplete="current-password">
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Login') }}</button>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset('admin/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('admin/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.js') }}"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 08:05:53 GMT -->
</html>

