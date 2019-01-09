@extends('layouts.adminmaster')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <br>
            <font color="#000000" face="微軟正黑體">行程規劃管理<small>　所有行程方案</small></font>
        </h1>
    </div>
</div>

<!-- /.row -->
<font color="#000000" face="微軟正黑體">
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead style="background-color: #c6c8ca">
                <tr>
                    <th width="60" style="text-align:center">行程編號</th>
                    <th width="80" style="text-align:center">行程日編號</th>
                    <th width="100" style="text-align:center">行程名稱</th>
                    <th width="100" style="text-align:center">圖片</th>
                    <th width="100" style="text-align:center">簡介1</th>
                    <th width="100" style="text-align:center">簡介2</th>
                    <th width="100" style="text-align:center">簡介3</th>
                    <th width="100" style="text-align:center">簡介4</th>
                    <th width="100" style="text-align:center">簡介5</th>
                    <th width="80" style="text-align:center"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tripdetails as $tds)
                    <tr>
                        <td>{{$tds->id}}</td>
                        <td>{{$tds->trips_id}}</td>
                        <td>{{$tds->name}}</td>
                        <td>{{$tds->pic}}</td>
                        <td>{{$tds->introduced1}}</td>
                        <td>{{$tds->introduced2}}</td>
                        <td>{{$tds->introduced3}}</td>
                        <td>{{$tds->introduced4}}</td>
                        <td>{{$tds->introduced5}}</td>
                        <td>
                            <div>
                                <button>
                                    <a href="{{ route('admin.tripdetail.edit', $tds->id) }}">編輯</a>
                                </button>
                                <form action="{{ route('admin.tripdetail.destroy', $tds->id) }}" method="POST">
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