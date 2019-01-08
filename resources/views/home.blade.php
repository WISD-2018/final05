@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card text-center">
                <div class="card-header" style="background-color: #c8cbcf"><font color="black" size="6" face="微軟正黑體">登入成功</font></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/admin') }}"><font color="#737373" size="5" face="微軟正黑體">Let's Go!民宿後台</font></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
