@extends('layouts.master')
@section('title','0120演藝訊息')
@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/IMAG1071.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <font color="#FFFFFF" size="20" face="標楷體"><b>0120演藝訊息</b></font>
                        <hr class="small">
                        <font color="#FFFFFF" size="6" face="標楷體">「詩歌~風起韻湧，享聽」合唱音樂會</font>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color:transparent">
                <div class="col-md-1" style="background-color:transparent"></div>
                <div class="col-md-10">
                    <div class="card-body" style="background-color:transparent">
                        <font color="#000000" size="5" face="標楷體">
                            <div class="col-md-4">
                                <div class="card-body" style="background-color:transparent;text-align:center">
                                    <img src="img/post/post3-4.jpg" width="100%">
                                </div>
                            </div>
                            <br>　■　發布日期：2018-01-09
                            <br><br>　■　截止日期：2018-01-20
                            <br><br>　■　發布單位：展演藝術科
                            <br><br>　■　時　　間：108年1月20日(日)晚上7:30
                            <br><br>　■　地　　點：澎湖縣演藝廳(免票入場)
                            <font color="#000000" size="4" face="標楷體">
                            <br><br>　　澎湖縣政府文化局將於108年1月20日(星期日)晚上7時30分在澎湖縣演藝廳，舉辦「詩歌--風起韻湧，享聽」合唱音樂會，歡迎喜好合唱藝術、熱愛音樂的鄉親與各界好友蒞臨聆賞。
                            <br>　　本次音樂會醞釀已久，除文化局合唱團之外，特邀臺北市立建國高級中學合唱團、馬公高中合唱團二支優秀的團體共襄盛舉聯合演出。各具風格的合唱團體共聚一方舞臺，誠為彼此合唱技巧交流的良機，更能藉此提升本縣藝術團隊音樂素質。
                            <br>　　此次演出以「詩歌」為題，音樂會中將演唱系列余光中、徐志摩二位著名詩人搭配優美編曲的詩作，如〈鄉愁四韻〉、〈我不知道風是在哪一個方向吹〉等，同時穿插蔣勳〈願〉、張曼娟〈月光箋〉、李叔同/林海音〈城南送別〉……等，搭配〈YELL〉、〈Lamentations of Jeremiah〉、〈O vos omnes〉等異國風情曲目及閩南語歌曲〈心肝寶貝〉，呈現合唱曲多樣風情，最後則以一曲充滿愛與希望的〈最美的事〉大合唱作為節目精彩尾聲。
                            <br>　　文化局合唱團以傳遞合唱藝術之美為重要目標，建中合唱團致力於聲音美感的追求和藝術氣氛的營造，馬公高中合唱團則期盼以歌聲感動人心，使聽到每一首合唱歌曲的聽眾，心裡都能有滿滿的感動。相信在這些優秀團隊詩與歌、聲與樂的激盪之下，必能帶給您一場詩情畫意、令人低迴再三的音樂饗宴。
                            <br>■　聯絡人：蔡小姐
                            <br>■　聯絡電話：9261141#234
                            <br>■　電子信箱：fs36100@phhcc.penghu.gov.tw
                            <br>　　　　　　　　　　　　　　　　　　　！文化局小提醒：演藝廳活動"請勿攜帶飲料及食物、勿穿拖鞋入場"
                            </font>
                        </font>
                    </div>
                </div>
                <div class="col-md-1" style="background-color:transparent"></div>
            </div>
            <div class="col-md-12" style="background-color:transparent">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="card-body" style="background-color:transparent;text-align:center">
                        <font color="#000000" size="4" face="標楷體">臺北市立建國中學合唱團</font>
                        <img src="img/post/post3-2.jpg" width="100%">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body" style="background-color:transparent;text-align:center">
                        <font color="#000000" size="4" face="標楷體">文化局合唱團</font>
                        <img src="img/post/post3-1.jpg" width="105%">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body" style="background-color:transparent;text-align:center">
                        <font color="#000000" size="4" face="標楷體">國立馬公高中合唱團</font>
                        <img src="img/post/post3-3.jpg" width="95%">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="{{url('/post4')}}">Next Posts &rarr;</a>
            </li>
        </ul>
    </div>
@endsection
