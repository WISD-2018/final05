@extends('layouts.master')
@section('title', 'Map_Detail')
@section('content')

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->

<header class="intro-header" style="background-image: url('https://i.imgur.com/fDkWInV.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>行程規劃</h1>
                    <hr class="small">
                    <span class="subheading">旅遊導覽--{{$maps->name}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

@include('layouts.link')

<!--foreach抓地圖資料表的pic-->
<div>
    <img src="{{$maps->pic}}" width="100%">
</div>
<ul class="pager">
    <li class="next">
        <a href="/trip">Go Back</a>
    </li>
</ul>

@endsection