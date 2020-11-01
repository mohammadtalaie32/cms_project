<!DOCTYPE html>
<html>
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="font.css"/>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href={{ asset('authen/images/icons/favicon.ico') }}/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/vendor/bootstrap/css/bootstrap.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('authen/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/vendor/animate/animate.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/vendor/css-hamburgers/hamburgers.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/vendor/select2/select2.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/css/util.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('authen/css/main.css') }}>
    <!--===============================================================================================-->


</head>


<body style="font-family: '20S-Yekan' !important;">

<div class="limiter">
    <div class="container-login100">
        <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
            @csrf

            <span style="font-family: '20S-Yekan' !important;font-weight: bolder;color:white" class="login100-form-title">
                    ورود اعضا
            </span>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input id="email" type="email" class="form-control input100 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                <input id="password" type="password" class="form-control input100 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <span class="focus-input100"></span>
                <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>

            </div>


            <div class="container-login100-form-btn">
                
                <button style="font-family: '20S-Yekan' !important;font-weight: bolder;margin-top: -20px;outline: none !important;" type="submit" class="btn btn-primary login100-form-btn">
                    {{ __('ورود') }}
                </button>
                <br>
                <br>
                <br>
                <div class="text-center" style="direction: rtl;margin-top: -28px">
                    <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    &nbsp;	&nbsp;	&nbsp; 	&nbsp;
                    <label class="form-check-label" for="remember" style="font-family: '20S-Yekan' !important;color: white; font-weight: bolder;font-size: 14px">
                        مرا بخاطر بسپار
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a style="font-family: '20S-Yekan' !important;font-weight: bolder;font-size: 14px;color: white" class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('گذرواژه را فراموش کرده اید؟') }}
                    </a>
                @endif

            </div>


            <div class="text-center p-t-50">
                <a class="txt2" href="{{route('register')}}" style="font-family: '20S-Yekan' !important;font-weight: bolder;font-size: 14px;color: white">
                    ثبت نام
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
                <br>
                <a class="txt2" href="{{route('home')}}" style="font-family: '20S-Yekan' !important;font-weight: bolder;font-size: 14px;color: white">
                    بازگشت به خانه
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </form>

    </div>
</div>




<!--===============================================================================================-->
<script src={{ asset('authen/vendor/jquery/jquery-3.2.1.min.js') }}></script>
<!--===============================================================================================-->
<script src={{ asset('authen/vendor/bootstrap/js/popper.js') }}></script>
<script src={{ asset('authen/vendor/bootstrap/js/bootstrap.min.js') }}></script>
<!--===============================================================================================-->
<script src={{ asset('authen/vendor/select2/select2.min.js') }}></script>
<!--===============================================================================================-->
<script src={{ asset('authen/vendor/tilt/tilt.jquery.min.js') }}></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src={{ asset('authen/js/main.js') }}></script>

</body>
</html>
