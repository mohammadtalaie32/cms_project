<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Mobile Application HTML5 Template">
    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

    <title>Mobster - One page app template</title>


    <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/mobster.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font.css')}}"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body style="overflow-x: hidden;font-family: '20S-Yekan' ">



@if($search != null)
    {{$search}}
@endif

<div class="row bg-dark shadow-lg">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        {!! Form::open(['method' => 'get' , 'url' => '/']) !!}
        <input class="form-control mt-2 mb-2 bg-dark" style="direction: rtl;text-align: center;color: white;outline: none !important;border:none !important;box-shadow: none !important;" type="text" placeholder=" جهت جستجو در صفحات کلمه مورد نظر را نوشته و اینتر را بزنید..." name="search" id="m_search" style="display: inline-block;">
        <button hidden type="submit">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>

<div style="background-image: url('{{asset('home_images/bg.png')}}')" id="pages">
    <br />
    <br />
    <br />
    <div class="container">
        <div class="row" style="">
{{--            <div class="col-lg-7 py-3 mb-5 mb-lg-0 ">--}}
{{--                <div class="img-place wow zoomIn ">--}}
{{--               </div>--}}
{{--            </div>--}}
            <div class="col-sm-12 py-3" style="text-align: center;font-weight:bolder;;direction: rtl">
                <h1 class="wow fadeInUp" style="font-size: 50px;font-weight: bolder;color: #2f2f2f">صفحات</h1>
                <br/>
                <br/>
                @foreach($pages as $page)
                    <center>
                        <a class="w-75 shadow-lg btn btn-dark" style="font-weight: bolder;font-size: 17px;line-height: 80px;border-radius: 50px"
                           href="{{route('show_page' , ['id' => $page->id])}}#pages"
                           class="shadow-lg  list-group-item list-group-item-action"
                           role="tab">{{$page->name}}
                        </a>
                    </center>
                    <br />
                    <br />
                @endforeach

                <center>
                    <br />
                    <a href="#contact1"  style="color: black;font-weight: bolder;">
                        <img class="wow fadeInUp" src="{{asset('home_images/icon-down.png')}}">
                        <h6 class="wow fadeInUp" style="font-weight: bolder">تماس با ما</h6>
                    </a>
                </center>

                <br/>
                <br/>
            </div>
        </div>
    </div>
</div>



    <br />
    <br />


@include('includes.contact')

@include('includes.footer')


<script src="{{asset('home_images/pattern_1.svg')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('assets/js/mobster.js')}}"></script>


</body>
</html>
