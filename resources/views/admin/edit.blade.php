@extends('layouts.adminmaster')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <br>
            <font color="#000000" face="微軟正黑體">編輯訂房<small>　編輯訂房資訊</small></font>
        </h1>
    </div>
</div>
<!-- /.row -->
<!-- /.row -->
<font color="#000000" face="微軟正黑體">
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-4"></div>
            <div class="col-lg-4">
        <div class="card-body">
        <form action="/admin/booking/{{$bookings->id}}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>訂房編號：</label>
                <input name="id" class="form-control" readonly="readonly" placeholder="請輸入訂房編號" value="{{$bookings->id}}">
            </div>

            <div class="form-group">
                <label>聯絡人：</label>
                <input name="name" class="form-control" readonly="readonly" placeholder="請輸入聯絡人名稱" value="{{$bookings->name}}">
            </div>

            <div class="form-group">
                <label>email：</label>
                <input name="email" class="form-control" readonly="readonly" placeholder="請輸入email" value="{{$bookings->email}}">
            </div>

            <div class="form-group">
                <label>電話：</label>
                <input name="phone" class="form-control" readonly="readonly" placeholder="請輸入電話" value="{{$bookings->phone}}">
            </div>

            <div class="form-group">
                <label>國家：</label>
                <input name="country" class="form-control" readonly="readonly" placeholder="請輸入國家" value="{{$bookings->country}}">
            </div>

            <div class="form-group">
                <label>地址：</label>
                <input name="address" class="form-control" readonly="readonly" placeholder="請輸入地址" value="{{$bookings->address}}">
            </div>

            <div class="form-group">
                <label>入住時間：</label>
                <input name="StartTime" class="form-control" readonly="readonly" placeholder="請輸入入住時間" value="{{$bookings->StartTime}}">
            </div>

            <div class="form-group">
                <label>退房時間：</label>
                <input name="EndTime" class="form-control" readonly="readonly" placeholder="請輸入退房時間" value="{{$bookings->EndTime}}">
            </div>

            <div class="form-group">
                <label>訂房檔案狀態：</label>
                <select name="state">
                    <option value="未完成">未完成</option>
                    <option value="完成">完成</option>
                </select>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">更新</button>
            </div>

            <div class="col-lg-4"></div>
        </form>
    </div>
    </div>
</div>
</font>
<!-- /.row -->