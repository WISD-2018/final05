@extends('layouts.master')
@section('title', 'Trip')

<style>
    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        grid-gap: 0px;
        padding: 2px;
    }
    .grid-container > div {
        text-align: center;
        padding: 20px 0;
        font-size: 20px;
    }
    .item1 {
        grid-column-start: 1;
        grid-column-end:3;
    }
    .item2 {
        border: 1px solid rgba(0, 0, 0, 0.8);
        grid-column-start:3;
        grid-column-end: 6;
    }
</style>

<header class="intro-header" style="background-image: url('https://i.imgur.com/fDkWInV.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <font color="#ffffff" size="80" face="微軟正黑體"><b>{{$tripdetails->name}}</b></font>
                    <hr class="small">
                </div>
            </div>
        </div>
    </div>
</header>

@include('layouts.link')

<div class="container">
    <br>
    <br>
    <div><font color="#737373" size="5" face="微軟正黑體"><b>★ 第一天</b></font><br></div>
    @foreach($views as $vs)
    <div class="grid-container">
        <div class="item1">
            <img src="{{$vs->pic}}" width="450">
        </div>
        <div class="item2">
            <font color="#737373" size="6" face="微軟正黑體"><b>{{$vs->name}}</b></font><br><br>
            <p align="left">
                <font color="#737373" size="4" face="微軟正黑體"><b>{{$vs->introduced}}</b></font><br><br>
            </p>
        </div>
    </div>
    <div><font color="#737373" size="5" face="微軟正黑體"><b>{{$vs->distance}}</b></font><br></div>
    @endforeach
</div>

<p class="text-center">
    <br><i class="fa fa-plane fa-4x"><font color="#737373" size="8" face="微軟正黑體"><b>旅程結束~~返程</b></font></i>
    <i class="fa fa-ship fa-4x"></i><br><br>
</p>
<font color="#737373" size="6" face="微軟正黑體"><b>　　　　遊客需知</b></font><br>
<font color="#737373" size="3" face="微軟正黑體"><b>　　　　　　　　　　★ 買澎湖名產要貨比三家才不吃虧。（ 黑糖糕只有三天保存期限 ，強烈建議最後一天回台灣再買）</b></font><br>
<font color="#737373" size="3" face="微軟正黑體"><b>　　　　　　　　　　★ 買澎湖文石要第一天買最好，萬一刻錯名字還有時間修改，而且趕工出來的刻印品質會小問題較多。</b></font><br>
<font color="#737373" size="3" face="微軟正黑體"><b>　　　　　　　　　　★ 吃澎湖海鮮可要先確定好價錢 ，很多遊客都吃完海鮮再付款時才發現價錢貴的離譜ㄋ。</b></font><br>
<font color="#737373" size="3" face="微軟正黑體"><b>　　　　　　　　　　★ 在澎湖的大馬路上騎乘機車或開車，時速不要超過６ ０公里 ，否則保證回台灣後一定收到超速照片。</b></font><br>
<font color="#737373" size="3" face="微軟正黑體"><b>　　　　　　　　　　★ 使用學生證購買旅遊景點門票、離島公共交通船..等會有學生優惠價ㄡ。</b></font><br>
<font color="#737373" size="3" face="微軟正黑體"><b>　　　　　　　　　　★ 馬公市中心無線網路漫遊已全部開通 ，歡迎各位遊客自行攜帶筆記型電腦來ㄡ。</b></font><br>