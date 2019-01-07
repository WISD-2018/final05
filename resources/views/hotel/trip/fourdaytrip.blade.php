@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')

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

    <header class="intro-header" style="background-image: url('img/view8.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>行程規劃</h1>
                        <hr class="small">
                        <span class="subheading">四日遊行程</span>
                    </div>
                </div>
            </div>
        </div>二
    </header>
    @include('layouts.link')

    <div id="st1" class="st">
        <div class="inner">

            <div class="grid-container">
                <div class="grid-item">
                    <div id="circular--landscape-1">
                        <div id="circular--landscape-1 img">
                            <a href="{{route('2DayPlanA')}}"><img src="img/dayplanview/4day1.jpg"></a>
                        </div>
                    </div>

                    <br>

                    <a href="{{route('2DayPlanA')}}"><h1><font color="#ffffff" size="5" face="微軟正黑體"><b>玩遍澎湖。深度之旅</b></font></h1></a>
                </div>
                <div class="grid-item">

                    <div id="circular--landscape-1">
                        <div id="circular--landscape-1 img">
                            <a href="{{route('2DayPlanB')}}"><img src="img/dayplanview/4day2.jpg"></a>
                        </div>
                    </div>

                    <br>
                    <a href="{{route('2DayPlanB')}}"> <h1><font color="#ffffff" size="5" face="微軟正黑體"><b>古蹟&老街，澎湖的文化與知性之旅</b></font></h1></a>

                </div>
                <div class="grid-item">

                    <div id="circular--landscape-1">
                        <div id="circular--landscape-1 img">
                            <a href="{{route('2DayPlanC')}}"><img src="img/dayplanview/4day3.jpg"></a>
                        </div>
                    </div>

                    <br>
                    <a href="{{route('2DayPlanC')}}"><h1><font color="#ffffff" size="5" face="微軟正黑體"><b>東海生態之旅</b></font></h1></a>
                </div>
                <div class="grid-item">
                    <div style=text-align:left;">

                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 巧奪天工的地質景觀!</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 透亮清澈的海水!</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 飽覽瑰麗多變的珊瑚!</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 本專案不分平、假日均可使用。</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 本活動適用於每年四至九月進行，冬季不建議進行。</b></font><br>


                    </div>

                </div>
                <div class="grid-item">
                    <div style=text-align:left;">

                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 走進時光隧道，現當年情景!</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 飽覽珍貴的歷史文物及國家級古蹟!</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 結合公共藝術、彩繪油桶、藝文展覽演出、水舞表演，讓人流連忘返!</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 本專案不分平、假日均可使用。</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 本活動全年適用。</b></font><br>


                    </div>
                </div>
                <div class="grid-item">
                    <div style=text-align:left;">

                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 不能錯過的就是澎湖特種植物—澎湖仙人掌!</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 海天一色的美景!</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 純樸自然的濕地，孕育許多生物棲息!</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 本專案不分平、假日均可使用。</b></font><br><br>
                        <font color="#737373" size="4" face="微軟正黑體"><b>★ 本活動於每年四至九月進行，冬季不建議進行。</b></font><br>


                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

    <div class="row.justify-content-center">
        <font color="#737373" size="5" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;『澎湖旅遊相關注意事項』</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.請攜帶中華民國身分證正本，因為是國內旅遊不用帶護照哦!</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.雖然是國內線飛機，還是請提早40~60分鐘前到機場較好。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.去澎湖的方式有搭飛機及搭船兩種方式。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.前往澎湖的人數眾多，不論是搭飛機或是搭船，請提早訂機票或船票。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.怕暈船的人，建議選擇搭飛機，又快又方便。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.澎湖風大、陽光大、紫外線更是毒，記得帶防曬乳、帽子、薄外套，能防曬的建議都帶，避免曬傷。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.建議4~9月份前往較適合，也算是澎湖的旅遊旺季，4~6月有花火節，6~9月是暑假階段，天氣炎熱，很適合玩水上活動。</b></font><br>

    </div>

@endsection