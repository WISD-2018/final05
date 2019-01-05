@extends('layouts.master')

@section('title', 'Trip')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/view8.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>行程規劃</h1>
                        <hr class="small">
                        <span class="subheading">The Next Station Of Happiness</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="row">
        <div class="col-md-8" style="background-color:transparent">
            @foreach($trips as $ts)
                <div class="col-md-4" style="padding-top: 20px;">
                    <div class="card" style="background-color:transparent">
                        <div class="card-header" style="width:250px;height:60px;text-align:center;line-height:40px;">
                            <a href="{{route('trip.id',$ts->id)}}"><span style="font-size:0.7cm;"><span style="font-family:SimSun;">{{$ts->name}}</span></span></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <!-- Main Content -->
    <div class="container">
        <div class="row.justify-content-center">
            {{--中--}}
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">

                    <img src="img/map.jpg" width="1000" height="1414" usemap="#map">
                    <map name="map">
                        @foreach($maps as $ms)
                        　<area shape="rect" coords="{{$ms->location}}" href="{{route('map.id',$ms->name)}}">
                            @endforeach
                    </map>
                </ul>
                <br>
            </div>
        </div>
    </div>


@endsection
