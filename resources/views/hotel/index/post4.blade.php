@extends('layouts.master')
@section('title','澎湖沙灘嘉年華')
@section('content')

    {{--css設計--}}
    <style type="text/css">
        /* 漸變 color1 - color2 - color1 */
        hr.style-one {
            border: 0;
            height: 3px;
            background: #333;
            background-image: linear-gradient(to right, #ccc, #333, #ccc);
        }
    </style>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/IMAG1071.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <font color="#FFFFFF" size="12" face="標楷體"><b>澎湖沙灘嘉年華</b></font>
                        <hr class="small">
                        <font color="#FFFFFF" size="5" face="標楷體">世界最美麗海灣組織 2017年國際年會in澎湖</font>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color:transparent">
                <div class="col-md-1" style="background-color:transparent"><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                <div class="col-md-4">
                    <div class="card-body" style="background-color:transparent;text-align:center">
                        <br><br><br><i class="fa fa-arrow-right fa-1x" style="color:gray"></i><font color="#000000" size="5" face="標楷體">　澎湖沙灘嘉年華　</font><i class="fa fa-arrow-left fa-1x" style="color:gray"></i>
                        <img src="img/post/post4-1.jpg" width="100%">
                    </div>
                </div>
                <div class="col-md-6" style="background-color:transparent;text-align:justify">
                    <font color="#000000" size="4" face="標楷體">
                    <br>　　澎湖於2014年甫正式成為世界最美麗海灣組織之成員，為營造推廣澎湖優勢之美麗、迷人的沙灘，以及多樣、特殊的海灣地景之景觀。
                    <br>　　首推最具觀光魅力「黃金沙灘」之優勢，來規劃舉辦沙灘運動賽事，推展運動休閒觀光，吸引更多隊伍呼朋引伴來澎參賽，且暢遊體驗菊島風情，藉此推廣澎湖特有人文史蹟、地景景觀、海洋生態及海洋遊憩等觀光資源，共創優美的澎湖、舒暢的澎湖、熱情的澎湖及活力澎湖的新形象，期為澎湖運動觀光事業帶來一股新的活力與風貌。
                    <br>　　「2017海灣旅遊年」暨行銷宣傳「世界最美麗海灣組織 2017年國際年會in澎湖」，於今（106）年4月14日以「澎湖灣沙灘路跑嘉年華活動」，整合海灣沙灘路跑、風箏傳情、水域活動體驗、社區創意市集及海洋協奏曲音樂饗宴等活動，型塑海島風情的旅遊意象與浪漫氛圍，緊接著4月19日為眾所期待的「2017澎湖國際海上花火節」正式宣告開始，也為今年澎湖國際海灣觀光季揭開第一波熱潮。
                    </font>
                </div>
                <div class="col-md-1" style="background-color:transparent"><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
            </div>
        </div>
            <hr class="style-one">
        <div class="row">
            <div class="col-md-12" style="background-color:transparent">
                <div class="col-md-1" style="background-color:transparent"><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                <div class="col-md-6" style="background-color:transparent">
                    <font color="#000000" size="4" face="標楷體">
                        <br><br><br><br><br>地點：隘門及林投沙灘
                        <br>內容：6公里沙灘路跑、長距離12公里沙灘路跑，以及在地觀光業者與居民共襄盛舉的海洋沙灘健走活動。
                    </font>
                </div>
                <div class="col-md-4">
                    <div class="card-body" style="background-color:transparent;text-align:center">
                        <br><i class="fa fa-arrow-right fa-1x" style="color:gray"></i><font color="#000000" size="5" face="標楷體">　沙灘路跑競賽　</font><i class="fa fa-arrow-left fa-1x" style="color:gray"></i>
                        <img src="img/post/post4-2.jpg" width="100%">
                    </div>
                </div>
                <div class="col-md-1" style="background-color:transparent"><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
            </div>
        </div>
            <hr class="style-one">
        <div class="row">
            <div class="col-md-12" style="background-color:transparent">
                <div class="col-md-1" style="background-color:transparent"><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                <div class="col-md-4">
                    <div class="card-body" style="background-color:transparent;text-align:center">
                        <i class="fa fa-arrow-right fa-1x" style="color:gray"></i><font color="#000000" size="5" face="標楷體">　嘉年華選手晚會　</font><i class="fa fa-arrow-left fa-1x" style="color:gray"></i>
                        <img src="img/post/post4-3.jpg" width="100%">
                    </div>
                </div>
                <div class="col-md-6" style="background-color:transparent">
                    <font color="#000000" size="4" face="標楷體">
                        <br><br><br><br>地點：隘門沙灘
                        <br>內容：由范逸臣所帶領充滿海島感受的歌曲，一齊來炒熱澎湖夏末初秋的夜空，讓所有來到澎湖遊玩的旅客及參賽的選手都能深切感受到澎湖充滿熱情與海洋活力的氛圍，藉由嘉年華活動來帶入高潮，High翻澎湖。
                    </font>
                </div>
                <div class="col-md-1" style="background-color:transparent"><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
            </div>
        </div>
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="{{url('/post1')}}">Next Posts &rarr;</a>
            </li>
        </ul>
    </div>
@endsection
