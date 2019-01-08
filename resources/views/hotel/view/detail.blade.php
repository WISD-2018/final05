@extends('layouts.master')

@section('title', 'Trip')


<header class="intro-header" style="background-image: url('https://i.imgur.com/fDkWInV.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>{{$tripdetails->name}}</h1>
                    <hr class="small">
                </div>
            </div>
        </div>
    </div>
</header>
@foreach($views as $vs)
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="page-heading">
                {{$vs->name}}
            </div>
        </div>
    </div>
    @endforeach