<!DOCTYPE html>
<html lang="fa_IR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Intensely : خانه</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/>
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="font.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<link rel="canonical" href="http://www.20script.ir" />
<body style="font-family: '20S-Yekan' ">

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header -->

<!-- Start header -->
<header id="header">
    <!-- header top search -->
    <div class="header-top">
        <div class="container">
            <form action="">
                <div id="search">
                    <input type="text" placeholder="کلمه مورد نظر را نوشته و اینتر را بزنید..." name="s" id="m_search" style="display: inline-block;outline: none">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-contact">
                        <ul>
                            <li>
                                <div class="phone" style="direction: ltr;">
                                    <i class="fa fa-phone"></i>
                                    &nbsp; +98 920 &nbsp; 452 &nbsp; 0112
                                </div>
                            </li>
                            <li>
                                <div class="mail" style="direction: ltr">
                                    <i class="fa fa-envelope"></i>
                                    iam@domain.com
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    @auth
                        <div class="header-login">
                            <label class="login modal-form" style="border: none;">{{ Auth::user()->name }}</label>
                            <a class="login modal-form" style="border:none;font-weight: bolder" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('خروج') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endauth
                    @guest
                        <div class="header-login">
                            <a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">ورود / عضویت</a>
                        </div>
                    @endguest


                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header -->


<!-- Start login modal window -->
<div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
        <!-- Start login section -->
        <div id="login-content" class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>ورود</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <label for="email">{{ __('ادرس ایمیل') }}</label><br>

                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                    </div>

                    <div>
                        <label for="password">{{ __('گذرواژه') }}</label>

                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div><br>

                    <div class="">
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('مرا بخاطر بسپار') }}
                                </label>
                            </div>
                        </div>
                    </div><br>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('ورود') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('گذرواژه را فراموش کرده اید؟') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer footer-box">
                <span>حساب ندارید؟ <a id="signup-btn" href="#">عضو شوید.</a></span>
            </div>
        </div>
        <!-- Start signup section -->
        <div id="signup-content" class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-lock"></i>عضویت</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <label for="name">{{ __('نام و نام خانوادگی') }}</label><br>

                        <div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div><br>

                    <div>
                        <label for="email">{{ __('ادرس ایمیل') }}</label><br>

                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div><br>

                    <div>
                        <label for="password">{{ __('گذرواژه') }}</label><br>

                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div><br>

                    <div>
                        <label for="password-confirm">{{ __('تایید گذرواژه') }}</label><br>

                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div><br>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="width:100%">
                                {{ __('ثبت نام') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer footer-box">
                <span>حساب دارید؟ <a id="login-btn" href="#">وارد شوید</a></span>
            </div>
        </div>
    </div>
</div>
<!-- End login modal window -->

@yield()
</html>
