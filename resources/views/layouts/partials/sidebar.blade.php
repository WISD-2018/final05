<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href={{ route('admin.index') }}><font color="#ffffff" face="微軟正黑體">民宿後台</font></a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li>
                    <a href="/"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class=href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class= "fa fa-fw fa-power-off"></i>

                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            {{--<li>--}}
                {{--<a href="{{ route('admin.post.index') }}"><font color="#ffffff" face="微軟正黑體"><i class="fa fa-fw fa-edit"></i>公告管理</font></a>--}}
            {{--</li>--}}
            <li>
                <a href="{{ route('admin.booking.index') }}"><font color="#ffffff" face="微軟正黑體"><i class="fa fa-fw fa-edit"></i>訂房管理</font></a>
            </li>
            <li>
                <a href="{{ route('admin.tripdetail.index') }}"><font color="#ffffff" face="微軟正黑體"><i class="fa fa-fw fa-edit"></i>行程規劃管理</font></a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>