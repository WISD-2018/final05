@extends('layouts.masterbook')
@section('title','澎湖民宿推薦「洪店民宿」')
@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('https://i.imgur.com/Uw9oSEV.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><font color="#ffffff" face="微軟正黑體">快速訂房</font></h1>
                        <hr class="small">
                        <span class="subheading" >Are You Ready->To Going Booking</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <form action="{{ route('booking.final') }}"   method="post" role="form" >
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p><font color="#000000" face="微軟正黑體">確認訂房資訊是否有誤!</font></p>
                    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                    <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                    <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                    <div class="card">

                        <div class="card-body">

                            <div class="form-group row" style="margin-top: 15px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><font color="#000000" face="微軟正黑體">{{ __('入住時間：') }}</font></label>

                                <input class="form-control col-md-6" type="text" name="StartTime" value="{{$start}}" readonly >
                                <input class="form-control col-md-6 hidden" type="text" name="EndTime" value="{{$start}}" readonly >
                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; ">
                                @if(count($results)>0)
                                    @foreach($results as $result)
                                        <label for="email" class="col-md-4 col-form-label text-md-right"><font color="#000000" face="微軟正黑體">{{ __('房型名稱：') }}</font></label>

                                        <input class="form-control col-md-6 hidden" type="text" name="rooms_id"  value="{{$result->id}}"readonly >
                                        <input class="form-control col-md-6" type="text"  value="{{$result->name}}" readonly >

                                        <div>&nbsp&nbsp&nbsp</div>

                                    @endforeach
                                @endif
                            </div>

                            <div class="form-group row" style="margin-top: 15px; ">
                                @if(count($results)>0)
                                    @foreach($results as $result)
                                        <label for="email" class="col-md-4 col-form-label text-md-right"><font color="#000000" face="微軟正黑體">{{ __('房型價格：') }}</font></label>

                                        <input class="form-control col-md-6" type="text"  value="{{$result->price}}" readonly >

                                        <div>&nbsp&nbsp&nbsp</div>

                                    @endforeach
                                @endif
                            </div>

                            <div class="form-group row" style="margin-top:15px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><font color="#000000" face="微軟正黑體">{{ __('姓名：') }}</font></label>

                                <input type="text" class="form-control" placeholder="姓名" name="name"  value="{{$name}}" readonly>

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><font color="#000000" face="微軟正黑體">{{ __('信箱：') }}</font></label>

                                <input type="email" class="form-control" placeholder="Email" name="email"  value="{{$email}}" readonly>

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><font color="#000000" face="微軟正黑體">{{ __('電話：') }}</font></label>

                                <input type="tel" class="form-control" placeholder="電話號碼" name="phone"  value="{{$phone}}" readonly>

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><font color="#000000" face="微軟正黑體">{{ __('國籍：') }}</font></label>

                                <input type="text" class="form-control" placeholder="國家" name="country"  value="{{$country}}" readonly>

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; margin-bottom: 15px ">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><font color="#000000" face="微軟正黑體">{{ __('地址：') }}</font></label>

                                <input type="text" class="form-control" placeholder="地址" name="address"  value="{{$address}}" readonly>

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; margin-bottom: 15px ">
                                <label for="check" class="col-md-8  col-md-offset-3 col-form-label text-md-center"><font color="#000000" face="微軟正黑體">{{ __('訂房後3天內匯款3成訂金即完成訂房!') }}</font></label>
                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; margin-bottom: 15px ">
                                @if(count($results)>0)
                                    @foreach($results as $result)
                                        <label for="price" class="col-md-8  col-md-offset-3 col-form-label text-md-center"><font color="#000000" face="微軟正黑體">{{ __('3成訂金為->') }} {{"$"}} {{$result->price*0.3}}</font></label>
                                    @endforeach
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary col-md-12 ">
                                <font color="#000000" face="微軟正黑體">{{ __('送出') }}</font>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection