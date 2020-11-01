<!DOCTYPE html>
<html lang="fa_IR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Intensely : خانه</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{asset('assets/images/favicon.ico')}}"/>
    <!-- Font Awesome -->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}"/>
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-progressbar-3.3.4.css')}}"/>
    <!-- Theme color -->
    <link id="switcher" href="{{asset('assets/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href={!! asset('style.css') !!} rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('font.css')}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<link rel="canonical" href="http://www.20script.ir" />
<body>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

@include('includes.login')
<!-- BEGIN MENU -->
<section id="menu-area">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">تغییر وضعیت</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="index.html">نام وبسایت</a>
                <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="active"><a href="index.html">خانه</a></li>
                    <li><a href="feature.html">ویژگی</a></li>
                    <li><a href="service.html">خدمات</a></li>
                    <li><a href="portfolio.html">نمونه کارها</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">وبلاگ <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="blog-archive.html">آرشیو وبلاگ</a></li>
                            <li><a href="blog-single-with-left-sidebar.html">بلاگ تکی با سایدبار چپ</a></li>
                            <li><a href="blog-single-with-right-sidebar.html">بلاگ تکی با سایدبار راست</a></li>
                            <li><a href="blog-single-with-out-sidebar.html">بلگ تکی بدون سایدبار</a></li>
                        </ul>
                    </li>
                    <li><a href="404.html">صفحه 404</a></li>
                    <li><a href="contact.html">تماس</a></li>
                </ul>
            </div><!--/.nav-collapse -->
            <a href="#" id="search-icon">
                <i class="fa fa-search">
                </i>
            </a>
        </div>
    </nav>
</section>
<!-- END MENU -->

<!-- Start slider -->
<section id="slider">
    <div class="main-slider">
        <div class="single-slide">
            <img src="assets/images/slider-1.jpg" alt="img">
            <div class="slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="slide-article">
                                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">طراحی خلاقانه و ویژگی عالی</h1>
                                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون</p>
                                <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">مشاهده بیشتر</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="slider-img wow fadeInUp">
                                <img src="assets/images/person1.png" alt="business man">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <img src="assets/images/slider-3.jpg" alt="img">
            <div class="slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="slide-article">
                                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">ما بهترین تیم پشتیبانی برای شما هستیم</h1>
                                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون</p>
                                <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">مشاهده بیشتر</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="slider-img wow fadeInUp">
                                <img src="assets/images/person2.png" alt="business man">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End slider -->

<!-- Start Feature -->
<section id="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area">
                    <h2 class="title">ویژگی ها</h2>
                    <span class="line"></span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-leaf feature-icon"></i>
                                <h4 class="feat-title">طراحی خلاقانه</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-mobile feature-icon"></i>
                                <h4 class="feat-title">طرح واکنش گرا</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-thumbs-o-up feature-icon"></i>
                                <h4 class="feat-title">ویژگی های عالی</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-gears feature-icon"></i>
                                <h4 class="feat-title">تنظیمات چندگانه</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-code feature-icon"></i>
                                <h4 class="feat-title">کدنویسی استاندارد</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-smile-o feature-icon"></i>
                                <h4 class="feat-title">پشتیبانی همه جانبه</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feature -->

<!-- Start about  -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area">
                    <h2 class="title">درباره ما</h2>
                    <span class="line"></span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="about-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="our-skill">
                                <h3>توانایی های ما</h3>
                                <div class="our-skill-content">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی</p>
                                    <div class="progress">
                                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="100">
                                            <span class="progress-title">Html5</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="85">
                                            <span class="progress-title">Css3</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="70">
                                            <span class="progress-title">JQuery</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="60">
                                            <span class="progress-title">wordPress</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="40">
                                            <span class="progress-title">Php</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="25">
                                            <span class="progress-title">Java</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-choose-us">
                                <h3>چرا انتخاب ما؟</h3>
                                <div class="panel-group why-choose-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    طراحی همه جانبه <span class="fa fa-minus-square"></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <img class="why-choose-img" src="assets/images/testi3.jpg" alt="img">
                                                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردها</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                    کدنویسی استاندارد<span class="fa fa-plus-square"></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردها</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                    پشتیبانی عالی<span class="fa fa-plus-square"></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردها</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- Start subscribe us -->
<section id="subscribe">
    <div class="subscribe-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe-area">
                        <h2 class="wow fadeInUp">عضویت در خبرنامه</h2>
                        <form action="" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <input type="text" placeholder="ایمیل خود را وارد کنید...">
                            <button class="subscribe-btn" type="submit">ثبت</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End subscribe us -->

<!-- Start footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                    <p>فارسی سازی توسط: <a href="http://hidata.org/">عباس مونسی</a></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="footer-right">
                    <a href="index.html"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="{{asset('assets/js/slick.js')}}"></script>
<!-- mixit slider -->
<script type="text/javascript" src="{{asset('assets/js/jquery.mixitup.js')}}"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
<!-- counter -->
<script src="{{asset('assets/js/waypoint.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.js')}}"></script>
<!-- Wow animation -->
<script type="text/javascript" src="{{asset('assets/js/wow.js')}}"></script>
<!-- progress bar   -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap-progressbar.js')}}"></script>


<!-- Custom js -->
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

</body>
<link rel="canonical" href="http://www.bistscript.ir" />
</html>
