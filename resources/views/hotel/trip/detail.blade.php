@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')




<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->

<header class="intro-header" style="background-image: url('https://i.imgur.com/SV0BJxs.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>行程規劃</h1>
                    <hr class="small">
                    <span class="subheading">旅遊導覽-吉貝</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="row">
    <div class="col-md-8" style="background-color:transparent">
            <div class="grid-container">
                <div class="item1">
                    <img src="{{$trips->pic1}}" width="300">
                    <font color="#737373" size="6" face="微軟正黑體"><b>馬公機場</b></font>
                    <font color="#737373" size="4" face="微軟正黑體"><b>馬公機場是....</b></font><br><br>
                    <img src="{{$trips->pic2}}" width="300">
                    <font color="#737373" size="6" face="微軟正黑體"><b>澎湖博物館是</b></font>
                    <font color="#737373" size="4" face="微軟正黑體"><b>澎湖博物館是....</b></font><br><br>
                    <img src="{{$trips->pic3}}" width="300">
                    <font color="#737373" size="6" face="微軟正黑體"><b>澎湖游泳池</b></font>
                    <font color="#737373" size="4" face="微軟正黑體"><b>澎湖游泳池是....</b></font><br><br>
                    <img src="{{$trips->pic4}}" width="300">
                    <font color="#737373" size="6" face="微軟正黑體"><b>123</b></font>
                    <font color="#737373" size="4" face="微軟正黑體"><b>123是....</b></font><br><br>
                    <img src="{{$trips->pic5}}" width="300">
                    <font color="#737373" size="6" face="微軟正黑體"><b>147</b></font>
                    <font color="#737373" size="4" face="微軟正黑體"><b>147是....</b></font><br><br>
                </div>
            </div>
    </div>
</div>
