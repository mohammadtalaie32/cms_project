<!DOCTYPE html>
<html lang="fa_IR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>یونیتی - قالب HTML انجمن چندمنظوره</title>

    <!-- only for the first header -->
{{--        <link href={!! asset('assets/css/bootstrap.css') !!}" rel="stylesheet">--}}
        <link href={!! asset('style.css') !!} rel="stylesheet">
    <!-- end -->

    <!-- icon -->
    <link rel="stylesheet" href={!! asset('theforum/fonts/icons/main/mainfont/style.css') !!}>
    <link rel="stylesheet" href={!! asset('theforum/fonts/icons/font-awesome/css/font-awesome.min.css') !!}>

    <!-- Vendor -->
{{--    <link rel="stylesheet" href={!! asset('theforum/vendor/bootstrap/v3/bootstrap.min.css') !!}>--}}

    <link rel="stylesheet" href={!! asset('theforum/vendor/bootstrap/v3/bootstrap.rtl.min.css') !!}>

{{--    <link rel="stylesheet" href={!! asset('theforum/vendor/bootstrap/v4/bootstrap-grid.css') !!}>--}}

    <!-- Custom -->
    <link rel="stylesheet" href={!! asset('theforum/css/style.css') !!}>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

</head>
<body>

<header id="header" style="position: relative;z-index: 2">
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
                            <a class="login modal-form" href="{{route('login')}}?intended=1">ورود / عضویت</a>
                        </div>
                    @endguest

                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header -->



<div style="z-index: 0 !important;">
    <div class="header js-header js-dropdown">
        <div class="container">
            <div>
                <h4>
                    لوگو اینجا
                </h4>
            </div>
            <div class="header__search">
                <form action="#">
                    <label>
                        <i class="icon-Search js-header-search-btn-open"></i>
                        <input type="search" placeholder="جستجو در محتوا ..." class="form-control">
                    </label>
                </form>
                <div class="header__search-close js-header-search-btn-close"><i class="icon-Cancel"></i></div>
            </div>
            <div class="header__menu">
                <div class="header__menu-btn" data-dropdown-btn="menu">
                    موضوعات<i class="icon-Menu_Icon"></i>
                </div>
                <nav class="dropdown dropdown--design-01" data-dropdown-list="menu">
                    <div>
                        <ul class="dropdown__catalog row">
                            <li class="col-xs-6"><a href="#">جدیدترین ها</a></li>
                            <li class="col-xs-6"><a href="#">خوانده نشده</a></li>
                            <li class="col-xs-6"><a href="#">گروه ها</a></li>
                            <li class="col-xs-6"><a href="#">کاربران</a></li>
                            <li class="col-xs-6"><a href="#">برچسب ها</a></li>
                            <li class="col-xs-6"><a href="#">میانبرها</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>دسته بندیها</h3>
                        <ul class="dropdown__catalog row">
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-f9bc64"></i>سرگرمی</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-348aa7"></i>اجتماعی</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-4436f8"></i>ویدیو</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-5dd39e"></i>تصادفی</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-ff755a"></i>خلاقیت</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-bce784"></i>تکنولوژی</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-83253f"></i>گیمینگ</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-c49bbb"></i>علم</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-3ebafa"></i>تغییرات</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-c6b38e"></i>گربه ها</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-a7cdbd"></i>سرگرمی</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-525252"></i>آموزشی</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-777da7"></i>بازی</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-368f8b"></i>سیاست</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="dropdown__catalog row">
                            <li class="col-xs-6"><a href="#">پشتیبانی</a></li>
                            <li class="col-xs-6"><a href="#">قوانین انجمن</a></li>
                            <li class="col-xs-6"><a href="#">وبلاگ</a></li>
                            <li class="col-xs-6"><a href="#">درباره ما</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="header__notification">
                <div class="header__notification-btn" data-dropdown-btn="notification">
                    <i class="icon-Notification"></i>
                    <span>6</span>
                </div>
                <div class="dropdown dropdown--design-01" data-dropdown-list="notification">
                    <div>
                        <a href="#">
                            <i class="icon-Favorite_Topic"></i>
                            <p>علی . 15 خرداد 1399<span>اخیراً کدام فیلم را تماشا کرده اید؟</span></p>
                        </a>
                        <a href="#">
                            <i class="icon-Reply_Empty"></i>
                            <p>علی . 15 خرداد 1399<span>من یک چیز آمازون کردم!</span></p>
                        </a>
                        <a href="#">
                            <i class="icon-Badge"></i>
                            <p>علیرضا . 15 خرداد 1399<span><img src="fonts/icons/badges/Lets_talk.svg" alt="">بیایید حرف بزنیم</span></p>
                        </a>
                        <a href="#">
                            <i class="icon-Badge"></i>
                            <p>علی . 15 خرداد 1399<span><img src="fonts/icons/badges/Intermediate.svg" alt="">حد واسط</span></p>
                        </a>
                        <a href="#">
                            <i class="icon-Share_Topic"></i>
                            <p>محمد . 22 خرداد 1399<span>به پرونده تصویری آن گربه احتیاج دارید.</span></p>
                        </a>
                        <a href="#">
                            <i class="icon-Pencil"></i>
                            <p>مهدی . 22 خرداد 1399<span>دکمه اشتراک گذاری و اشتراک گذاری فیس بوک جدید.</span></p>
                        </a>
                        <span><a href="#">نمایش همه اعلان ها ...</a></span>
                    </div>
                </div>
            </div>
            <div class="header__user">
                @auth
                    <div class="header__user-btn" data-dropdown-btn="user">
                        @auth<i class="icon-Arrow_Below"></i>@endauth
                    </div>
                @endauth
                @auth
                    <nav class="dropdown dropdown--design-01" data-dropdown-list="user">
                        <div>
                            <div class="dropdown__icons">
                                <a href="#"><i class="icon-Bookmark"></i></a>
                                <a href="#"><i class="icon-Message"></i></a>
                                <a href="#"><i class="icon-Preferences"></i></a>
                                <a href="#"><i class="icon-Logout"></i></a>
                            </div>
                        </div>
                        <div>
                            <ul class="dropdown__catalog">
                                <li><a href="#">پنل مدیریت</a></li>
                                <li><a href="#">نشانها</a></li>
                                <li><a href="#">گروه های من</a></li>
                                <li><a href="#">اعلان ها</a></li>
                                <li><a href="#">موضوعات</a></li>
                                <li><a href="#">پسندیدن ها</a></li>
                                <li><a href="#">راه حل ها</a></li>
                            </ul>
                        </div>
                    </nav>
                @endauth

            </div>
        </div>
</div>


<!-- MAIN -->
<main>
    <div class="container">
        <br>
        <div class="posts">
            @yield('content')

        </div>
    </div>
</main>

<!-- FOOTER -->
<footer>
    <div class="footer js-dropdown">
        <div class="container">
            <div class="footer__logo">
                <div>
                    <img src="fonts/icons/main/Logo_Forum.svg" alt="logo">Unity
                </div>
            </div>
            <div class="footer__nav">
                <div class="footer__tline">
                    <i class="icon-Support"></i>
                    <ul class="footer__menu">
                        <li><a href="#">پشتیبانی</a></li>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">ارتباط با ما</a></li>
                        <li><a href="#">تیم ما</a></li>
                    </ul>
                    <div class="footer__language">
                        <div class="footer__language-btn" data-dropdown-btn="language">انگلیسی<i class="icon-Arrow_Below"></i></div>
                        <div class="footer__language-dropdown dropdown dropdown--design-01 dropdown--reverse-y" data-dropdown-list="language">
                            <div class="row">
                                <div class="col-xs-6">
                                    <h3>منطقه</h3>
                                    <ul class="dropdown__catalog">
                                        <li class="active"><a href="#"><i></i>آمریکا</a></li>
                                        <li><a href="#"><i></i>اروپا</a></li>
                                        <li><a href="#"><i></i>آسیا</a></li>
                                        <li><a href="#"><i></i>استرالیا</a></li>
                                        <li><a href="#"><i></i>ایران</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <h3>زبان</h3>
                                    <ul class="dropdown__catalog">
                                        <li class="active"><a href="#"><i></i>انگلیسی</a></li>
                                        <li><a href="#"><i></i>اسپانیایی</a></li>
                                        <li><a href="#"><i></i>چینی</a></li>
                                        <li><a href="#"><i></i>ژاپنی</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bline">
                    <ul class="footer__menu">
                        <li class="footer__copyright"><span>کپی رایت&copy; 2017. کلیه حقوق محفوظ است</span></li>
                        <li><a href="#">تیم ها</a></li>
                        <li><a href="#">حریم خصوصی</a></li>
                        <li><a href="#">بازخوردها</a></li>
                    </ul>
                    <ul class="footer__social">
                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cloud" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="footer__language-btn-m" data-dropdown-btn="language">انگلیسی<i class="icon-Arrow_Below"></i></div>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- JAVA SCRIPT -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{!! asset('theforum/vendor/jquery/jquery.min.js') !!}"></script>
    <script src={!! asset('myjs.js') !!}></script>

<script src={!! asset('theforum/vendor/velocity/velocity.min.js') !!}></script>

<script src={!! asset('theforum/js/app.js') !!}></script>



</body>
<link rel="canonical" href="http://www.bistscript.ir" />

</html>
