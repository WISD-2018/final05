@extends('layouts.adminmaster')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <br>
            <font color="#000000" face="微軟正黑體">編輯行程<small>　編輯行程詳細介紹</small></font>
        </h1>
    </div>
</div>
<!-- /.row -->
<!-- /.row -->
<font color="#000000" size="3" face="微軟正黑體">
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
        <form action="/admin/tripdetail/{{$tripdetails->id}}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>行程編號：</label>
                <input name="id" class="form-control" readonly="readonly" placeholder="請輸入訂房編號" value="{{$tripdetails->id}}">
            </div>

            <div class="form-group">
                <label>行程日編號：</label>
                <input name="trips_id" class="form-control" placeholder="請輸入聯絡人名稱" value="{{$tripdetails->trips_id}}">
            </div>

            <div class="form-group">
                <label>行程名稱：</label>
                <input name="name" class="form-control" placeholder="請輸入email" value="{{$tripdetails->name}}">
            </div>

            <div class="form-group">
                <label>圖片：</label>
                <input name="pic" class="form-control" placeholder="請輸入電話" value="{{$tripdetails->pic}}">
            </div>

            <div class="form-group">
                <label>簡介1：</label>
                <input name="introduced1" class="form-control" placeholder="請輸入國家" value="{{$tripdetails->introduced1}}">
            </div>

            <div class="form-group">
                <label>簡介2：</label>
                <input name="introduced2" class="form-control" placeholder="請輸入地址" value="{{$tripdetails->introduced2}}">
            </div>

            <div class="form-group">
                <label>簡介3：</label>
                <input name="introduced3" class="form-control" placeholder="請輸入入住時間" value="{{$tripdetails->introduced3}}">
            </div>

            <div class="form-group">
                <label>簡介4：</label>
                <input name="introduced4" class="form-control" placeholder="請輸入退房時間" value="{{$tripdetails->introduced4}}">
            </div>

            <div class="form-group">
                <label>簡介5：</label>
                <input name="introduced5" class="form-control" placeholder="請輸入退房時間" value="{{$tripdetails->introduced5}}">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">更新</button>
            </div>
        </form>
        </div>
    </div>
</div>
</font>
<!-- /.row -->