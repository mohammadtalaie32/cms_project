@extends('layouts.forum')

@section('content')

    @if($thread)
            <div class="list-group">
                <div class="list-group-item list-group-item-action flex-column align-items-start my_own_div">
                    <div class="d-flex w-100 justify-content-between">

                        <div class="float-right" style="float: right;padding-top:0px;margin: 0 20px 0 40px;">
                            <div class="row">
                                @auth
                                    <a href="" class="mylike">
                                        <img id="like"  src="{{asset('theforum/images/aup.png')}}">
                                    </a>
                                @endauth
                            </div>
                            <div class="row" style="font-family: Tahoma;direction: ltr;font-weight: bolder;font-size: 25px;padding-left: 9.5px;text-align: center;">
                                @auth
                                    <div id="count_likes">{{$count}}</div>
                                @endauth
                            </div>
                            <div class="row">
                                @auth
                                <a href="" class="mylike">
                                    <img id="dislike" src="{{asset('theforum/images/adown.png')}}">
                                </a>
                                @endauth
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1" id="title">
                                {{$thread->title}}
                            </h5>
                            <small></small>
                            <p style="border: none;margin-top: 5px" class="mb-1">توسط {{$thread->author}}</p>
                        </div>

                    </div>
                    <hr>
                    <p style="font-size: 17px">{!! $thread->content !!}</p>
                </div>

            </div>
            <br>
            <h3>پاسخ ها</h3><br>
            @if($thread->answers->where('is_best_answer' , 1)->first())
                <div class="row" style="padding-top: 10px;background-color: #FFFFFF !important;border:solid 1px #DDDDDD !important;border-bottom:none !important;">
                    <div class="col-sm-1" style="text-align: center;height: 105px;line-height: 105px">
                        @can('update-thread',$thread)
                            {!! Form::open(['method'=>'PUT' , 'url' => 'update_best_answer/' . $thread->answers->where('is_best_answer' , 1)->first()->id]) !!}
                                <button type="submit" style="border:none;background: none" rel="tooltip" data-toggle="tooltip" data-placement="top" title="غیرفعال کن">
                                    <img style="cursor: hand" src="{{asset('theforum/images/star.png')}}">
                                </button>
                            {!! Form::close() !!}
                        @endcan
                        @cannot('update-thread' , $thread)
                            <img  src="{{asset('theforum/images/star.png')}}"> <br/>

                        @endcannot
                    </div>

                    <div class="col-sm-11 " style="height: 100px;">
                        <h6 id="title">
                            {{ $thread->answers->where('is_best_answer' , 1)->first()->user->name}}
                        </h6>
                        <small>3 روز قبل</small> <br/>
                        <small>توسط {{$thread->answers->where('is_best_answer' , 1)->first()->user->name}}</small>
                        <hr style="margin-top: 10px !important;">
                    </div>
                </div>
                <div class="row" style="padding-top: 20px;background-color: #FFFFFF;border-right: solid 1px #DDDDDD;border-left: solid 1px #DDDDDD;border-bottom: solid 1px #DDDDDD;">
                    <div class="col-sm-10 col-sm-offset-1" style="margin-bottom: 20px;font-size: 17px !important; ">
                        {!! $thread->answers->where('is_best_answer' , 1)->first()->content !!}
                    </div>
                </div>

                <br />
                <br />
            @endif
            @if($thread->answers->where('is_best_answer' , 0)->first())
                @foreach($thread->answers->where('is_best_answer' , 0) as $answer)

                        <div class="row" style="padding: 20px;background-color: #FFFFFF !important;border:solid 1px #DDDDDD !important;border-bottom:none !important;">
                            <div class="@can('update-thread' , $thread) col-sm-10 @endcan @cannot('update-thread' , $thread) col-sm-12 @endcannot " style="height: 100px;">
                                <h6 id="title">
                                    {{ $answer->user->name}}
                                </h6>
                                <small>3 روز قبل</small> <br/>
                                <small>توسط {{$answer->user->name}}</small>
                                <hr style="margin-top: 10px !important;">
                            </div>
                            @can('update-thread' , $thread)
                                @if($thread->answers->where('is_best_answer' , 1)->first())

                                @else
                                    <div class="col-sm-2" style="text-align: center;padding-top: 10px">
                                        {!! Form::open(['method'=>'PUT' , 'url' => 'update_best_answer/' . $answer->id]) !!}
                                        <button type="submit" style="border:none;background: none" rel="tooltip" data-toggle="tooltip" data-placement="top" title="انتخاب به عنوان بهترین">
                                            <img style="cursor: hand" src="{{asset('theforum/images/star.png')}}">
                                            <br />
                                            <h6>انتخاب به عنوان بهترین</h6>
                                        </button>
                                        {!! Form::close() !!}
                                    </div>
                                @endif
                            @endcan
                        </div>
                        <div class="row" style="padding-top: 20px;background-color: #FFFFFF;border-right: solid 1px #DDDDDD;border-left: solid 1px #DDDDDD;border-bottom: solid 1px #DDDDDD;">
                            <div class="col-sm-12" style="margin-bottom: 20px;font-size: 17px">
                                {!! $answer->content !!}
                            </div>
                        </div>

                        <br/>
                        <br/>
                @endforeach
            @endif
    @endif

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>



@endsection
