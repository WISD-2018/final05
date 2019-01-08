@extends('layouts.adminmaster')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <br>
            <font color="#000000" face="微軟正黑體">訂房管理<small>　所有訂房表</small></font>
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- /.row -->
<font color="#000000" face="微軟正黑體">
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead style="background-color: #c6c8ca">
                <tr>
                    <th width="100" style="text-align:center">訂房編號</th>
                    <th width="100" style="text-align:center">房型編號</th>
                    <th width="70" style="text-align:center">聯絡人</th>
                    <th width="30" style="text-align:center">email</th>
                    <th width="30" style="text-align:center">電話</th>
                    <th width="50" style="text-align:center">國家</th>
                    <th width="70" style="text-align:center">地址</th>
                    <th width="100" style="text-align:center">入住時間</th>
                    <th width="100" style="text-align:center">退房時間</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $books)
                    <tr>
                        <td>{{$books->id}}</td>
                        <td>{{$books->rooms_id}}</td>
                        <td>{{$books->name}}</td>
                        <td>{{$books->email}}</td>
                        <td>{{$books->phone}}</td>
                        <td>{{$books->country}}</td>
                        <td>{{$books->address}}</td>
                        <td>{{$books->StartTime}}</td>
                        <td>{{$books->EndTime}}</td>
                        <td>
                            <div>
                                <button>
                                    <a href="{{ route('admin.booking.edit', $books->id) }}">編輯</a>
                                </button>
                                <form action="{{ route('admin.booking.destroy', $books->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button>刪除</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</font>

<!-- /.row -->