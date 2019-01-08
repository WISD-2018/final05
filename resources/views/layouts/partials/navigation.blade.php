<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu<i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" a href="{{route('hotel.index')}}">Hotel.com</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('hotel.about')}}"><span style="font-size:0.7cm;"><font color="#ffffff" size="5" face="微軟正黑體">關於我們</font></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('hotel.rooms')}}"><span style="font-size:0.7cm;"><font color="#ffffff" size="5" face="微軟正黑體">房型介紹</font></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('hotel.booking')}}"><span style="font-size:0.7cm;"><font color="#ffffff" size="5" face="微軟正黑體">快速訂房</font></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('hotel.trip')}}"><span style="font-size:0.7cm;"><font color="#ffffff" size="5" face="微軟正黑體">行程規劃</font></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('hotel.review')}}"><span style="font-size:0.7cm;"><font color="#ffffff" size="5" face="微軟正黑體">回憶紀錄</font></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
