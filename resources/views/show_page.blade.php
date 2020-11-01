<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Mobile Application HTML5 Template">
    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

    <title>Mobster - One page app template</title>

    <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}" type="image/x-icon">

    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/mobster.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('font.css')}}"/>
</head>

<body style="overflow-x: hidden;font-family: '20S-Yekan' ">


<div class="page-section" style="margin: 0 !important;background-image: url('{{asset('assets/img/bg.png')}}')" id="pages">
    <div class="container">
        <div class="row" style="">
            {{--            <div class="col-lg-7 py-3 mb-5 mb-lg-0 ">--}}
            {{--                <div class="img-place wow zoomIn ">--}}
            {{--               </div>--}}
            {{--            </div>--}}
            <div class="col-sm-12 py-3" style="text-align: center;font-weight:bolder;;direction: rtl">
                <h1 class="wow fadeInUp" style="font-size: 50px;font-weight: bolder;color: #2f2f2f">{{$this_page->name}}</h1>
                @foreach($treeview as $page)
                     {{$page->name}}  /
                @endforeach
                <br/>
                <br/>

                @if($pages->first())
                    @foreach($pages as $page)
                        <center>
                            <a style="font-weight: bolder;font-size: 17px;line-height: 80px;border-radius: 50px"
                               href="{{route('show_page' , ['id' => $page->id])}}#pages"
                               class="shadow-lg btn btn-dark w-50"
                               role="tab">{{$page->name}}
                            </a> <br />
                            <br />
                            <br />
                            @if($parent_id != null)
                                <a class="btn btn-dark" style="border-radius: 50px" href="{{url('/page/'. $parent_id)}}#pages">بازگشت</a>
                            @else
                                <a class="btn btn-dark" style="border-radius: 50px" href="{{url('/')}}#pages">بازکشت</a>
                            @endif
                        </center>
                    @endforeach
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                @else
                    <center>
                        <br />
                        <h5 style="font-weight: bolder" class="text-muted">!صفحه ای در این قسمت موجود نمی باشد</h5> <br/>
                        @if($parent_id != null)
                            <a class="btn btn-dark" style="border-radius: 50px" href="{{url('/page/'. $parent_id)}}#pages">بازگشت</a>
                        @else
                            <a class="btn btn-dark" style="border-radius: 50px" href="{{url('/')}}#pages">بازکشت</a>
                        @endif

                    </center>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                @endif

                <center>
                    <br />
                    <a href="#contact1"  style="color: black;font-weight: bolder;">
                        <img class="wow fadeInUp" src="{{asset('assets/img/icon-down.png')}}">
                        <h6 class="wow fadeInUp" style="font-weight: bolder">تماس با ما</h6>
                    </a>
                </center>
            </div>
        </div>
    </div>
</div>


<div id="pages" class="row" style="margin-top: 100px">
    <div class="container  wow fadeInUp" style="padding: 0 !important;" >
        <center> <h1 style="font-size: 50px;font-weight: bolder;">صفحات</h1> </center>

        <center> <h6 style="font-size: 20px;font-weight: bolder;direction: rtl">
            @foreach($treeview as $page)
                / {{$page->name}}
            @endforeach</h6>
        </center>

        <br><br><br>






    </div>
</div>


@include('includes.contact')

@include('includes.footer')


<script src="{{asset('assets/img/pattern_1.svg')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('assets/js/mobster.js')}}"></script>

</body>
</html>








@if($parent_id != null)
    <a href="{{route('show_page' , ['id' => $parent_id])}}" style="line-height: 30px;" class=" link list-group-item list-group-item-action" role="tab">Back</a>
@else
    <a href="{{route('home')}}" style="line-height: 30px;" class="link list-group-item list-group-item-action" role="tab">Back</a>
@endif

@foreach($pages as $page)
    <a href="{{route('show_page' , ['id' => $page->id])}}" class=" link list-group-item list-group-item-action" role="tab">{{$page->name}}</a>
@endforeach
@foreach($pages as $page)
    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list" style="background-color: white !important;">...</div>
@endforeach
