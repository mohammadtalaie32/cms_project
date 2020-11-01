@extends('layouts.forum')

@section('content')

    @if($threads)
        @foreach($threads as $thread)
            <div class="list-group" style="direction: rtl !important;">

                    <a style="direction: rtl !important;" href="{{route('threads.show' , $thread->id)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">

                            <div class="float-right" style="float: right;padding-top:17px;margin: 0 20px 0 40px;">
                                <div class="row">
                                    <p style="color: green;font-size: 15px;direction: ltr">{{$thread->likes()->count()}}</p>&nbsp;<p style="color: green;font-size: 13px;font-weight: bolder">امتیاز</p>
                                </div>
                                <div class="row">
                                    <p style="color:darkslateblue;font-size: 13px;font-weight: bolder">{{$thread->answers->count()}} پاسخ</p>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">
                                    {{$thread->title}}
                                </h5>
                                <small>3 روز قبل</small>
                                <p style="border: none;margin-top: 5px" class="mb-1">توسط {{$thread->user->name}}</p>
                            </div>

                        </div>

                    </a>

            </div>
        @endforeach
    @endif

@endsection
