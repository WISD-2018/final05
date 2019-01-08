@extends('layouts.master')
@section('title','index')
@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/IMAG1071.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><font color="#ffffff" face="微軟正黑體">洪店民宿</font></h1>
                        <hr class="small">
                        <span class="subheading">Where Are You Going -> Just Go Here</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color:transparent;text-align:center;">
                <font color="#000000" size="5" face="標楷體"><b>~最新消息~</b></font>
            </div>
            <div class="col-md-12" style="background-color:transparent">
                <div class="col-md-2" style="background-color:transparent"></div>
                <div class="col-md-8" style="background-color:transparent">
                    <div class="post-preview">
                        <a href="{{url('/post1')}}">
                            <h2 class="post-title"><font color="#000000" face="微軟正黑體">土魠的季節，好吃的滋味！</font></h2>
                            <h3 class="post-subtitle"><font color="#000000" face="微軟正黑體">愛吃魚的朋友有福了！！今天土魠魚有三隻上岸歡迎詢問購買！</font></h3>
                    </a>
                    <p class="post-meta">Posted by <a>Yi-Wei,Zheng</a> on November 08, 2018</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{url('/post2')}}">
                        <h2 class="post-title"><font color="#000000" face="微軟正黑體">今年五月，花火節正式登場！</font></h2>
                        <h3 class="post-subtitle"><font color="#000000" face="微軟正黑體">帶著你的老婆們一起來到這個地方，跟我們享受這個美好的時光吧！</font></h3>
                    </a>
                    <p class="post-meta">Posted by <a>Guan-Yu,Chen</a> on May 15, 2018</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{url('/post3')}}">
                        <h2 class="post-title"><font color="#000000" face="微軟正黑體">0120演藝訊息</font></h2>
                        <h3 class="post-subtitle"><font color="#000000" face="微軟正黑體">「詩歌~風起韻湧，享聽」合唱音樂會</font></h3>
                    </a>
                    <p class="post-meta">Posted by <a>Zi-Ting,Chen</a> on January 09, 2018</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{url('/post4')}}">
                        <h2 class="post-title"><font color="#000000" face="微軟正黑體">澎湖沙灘嘉年華</font></h2>
                        <h3 class="post-subtitle"><font color="#000000" face="微軟正黑體">世界最美麗海灣組織 2017年國際年會in澎湖</font></h3>
                    </a>
                    <p class="post-meta">Posted by <a>Home-Wei,ZHANG</a> on March 27, 2017</p>
                </div>
                <hr>
                <!-- Pager -->
                {{--<ul class="pager">--}}
                    {{--<li class="next">--}}
                        {{--<a href="#">Older Posts &rarr;</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </div>
            </div>
        </div>
    </div>


@endsection
