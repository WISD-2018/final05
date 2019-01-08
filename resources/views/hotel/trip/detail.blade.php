@extends('layouts.master')
@section('title', 'Trip')

<style>
    .grid-container {
        display: grid;
        grid-column-gap: 5px;
        grid-template-columns: repeat(3, 1fr);;
        padding: 100px;
    }
    .grid-item {
        padding: 20px;
        font-size: 10px;
        text-align: center;
    }
    #circular--landscape-1{
        display:inline-block;
        position:relative;
        width:250px;
        height:250px;
        overflow:hidden;
        border-radius:125px;
    }
    #circular--landscape-1 img{
        width:auto;
        height:100%;
        margin-left:-20%;
    }
    #st1 .inner {
        padding: 1em 4%;
    }
    #st1 h1 {
        background: rgba(60%,0%,0%,0.6);
    }
    #st1 p {
        background: rgba(0%,10%,20%,0.6);
    }
</style>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->

<header class="intro-header" style="background-image: url('https://i.imgur.com/fDkWInV.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1><font color="#ffffff" face="微軟正黑體">{{$trips->name}}</font></h1>
                    <hr class="small">
                </div>
            </div>
        </div>
    </div>
</header>

    @include('layouts.link')

@foreach($tripdetails as $tds)
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="page-heading">
                <a href="{{route('view.id',$tds->id)}}"><span style="font-size:0.7cm;"><span style="font-family:SimSun;">{{$tds->name}}</span></span></a>
            </div>
            <br>
        </div>
    </div>
@endforeach