@extends('layouts.master')
@section('title', 'rooms')
@section('content')

    {{--css設計--}}
    <style type="text/css">
        #fun1{
            width:555px;
            line-height:30px;
            padding:5px;
            /*border:2px blue solid;*/
            margin-right:10px;
            margin-top:20px;/*與上間隔*/
            margin-bottom:5px;/*與下間隔*/
            float:left;
        }
        #circular--landscape-1{
            display:inline-block;
            position:relative;
            width:250px;
            height:250px;
            overflow:hidden;
            border-radius:125px;
            margin-left:12%;/*與左間隔*/
            margin-top:15px;/*與上間隔*/
        }
        #circular--landscape-1 img{
            width:auto;
            height:100%;
            margin-left:-15%;
        }
    </style>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/view4.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><font color="#ffffff" face="微軟正黑體">房型介紹</font></h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="card" style="border-style: none;letter-spacing:15px;background-color:gray;">
                            <div class="card-body">
                                <font color="#ffffff" size="5" face="標楷體">•純樸的漁村生活</font><br>
                                <font color="#ffffff" size="5" face="標楷體">•清澈的美麗海景</font><br>
                                <font color="#ffffff" size="5" face="標楷體">•舒服的華麗設計</font>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card" style="border-style: none;letter-spacing:2px;background-color:transparent;padding-top: 30px">
                            <div class="card-body">
                                <font color="#737373" size="5" face="標楷體"><b>踏上未知旅程•享受前所未有的感受</b></font><br>
                                <font color="#737373" size="4" face="標楷體">　　為了您了旅行，我們已經為您準備好了各式各樣的房型，任您來精挑細選</font><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6" style="padding-top:22px">
                        <div id="fun1">
                            <img src="img/about-main.jpg" width=100%>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 30px">
                        <div class="card text-center" style="background-image: url('img/background/5.jpg');filter:alpha(opacity=.1);background-size: 570px 350px;">
                            <div class="card-body">
                                <font face="標楷體" size="5" >
                                    <font size="6" ><b>溫馨住宿</b></font>
                                    <br>• 時間長度不定  　• 價格不固定
                                    <br>洪店民宿有六人房，四人房和二人房
                                    <br>遠離塵囂的馬公鬧區
                                    <br>是個安靜又離鬧區不遠的澎湖小漁村
                                    <br>我們不只是提供住的舒適的房間
                                    <br>最主要的是提供人的服務
                                    <br>讓您像是住到老朋友家，有個愉快的旅行回憶
                                </font>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top:10px">
                        <div class="card" style="background-image: url('img/rightback.png');background-size:102% 103%">
                            <div class="card-body">
                                <div class="wpb_wrapper">
                                    <font color="#000000" face="標楷體" size="5" style="line-height:15px;">
                                        <font size="6"><b>　　　　　房價一覽表</b></font>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>　房型</th>
                                                <th>　床數</th>
                                                <th>　定價(NTD)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>　小管房</td>
                                                <td>　一大床</td>
                                                <td>　3,600</td>
                                            </tr>
                                            <tr>
                                                <td>　土魠房</td>
                                                <td>　兩大床</td>
                                                <td>　4,800</td>
                                            </tr>
                                            <tr>
                                                <td>　石斑房</td>
                                                <td>　三大床</td>
                                                <td>　6,600</td>
                                            </tr>
                                            <tr>
                                                <td>　紅魽房</td>
                                                <td>　兩大床</td>
                                                <td>　4,500</td>
                                            </tr>
                                            <tr>
                                                <td>　花枝丸房</td>
                                                <td>　一大床</td>
                                                <td>　3,600</td>
                                            </tr>
                                            <tr>
                                                <td>　垵米房</td>
                                                <td>　兩大床</td>
                                                <td>　4,500</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="background-color:transparent">
                    @foreach($rooms as $rs)
                        <div class="col-md-4" style="padding-top: 30px;">
                            <div class="card" style="background-color:transparent">
                                <div class="card-header" style="width:350px;height:60px;text-align:center;line-height:40px;">
                                    <a href="{{route('rooms.id',$rs->id)}}"><font color="#737373" size="6" face="標楷體">{{$rs->name}}</font></a>
                                </div>
                                <div class="card-body">
                                    <div id="circular--landscape-1">
                                        <div id="circular--landscape-1 img">
                                            <img src="{{$rs->pic}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </article>
@endsection