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
                        <h1><font color="#ffffff" face="微軟正黑體">行程規劃</font></h1>
                        <hr class="small">
                        <span class="subheading">The Next Station Of Happiness</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @include('layouts.link')

    <!-- Main Content -->
    <div class="container">
        <div class="row.justify-content-center">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                    <img src="img/map.jpg" width="1000" height="1414" usemap="#map">
                    <map name="map">
                        @foreach($maps as $ms)
                        　<area shape="rect" coords="{{$ms->location}}" href="{{route('map.id',$ms->id)}}">
                        @endforeach
                    </map>
                </ul>
                <br>
            </div>
        </div>
    </div>

@endsection