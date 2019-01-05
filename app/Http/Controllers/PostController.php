<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post1()
    {
        return view('hotel.index.post1');
    }
    public function post2()
    {
        return view('hotel.index.post2');
    }
    public function post3()
    {
        return view('hotel.index.post3');
    }
    public function post4()
    {
        return view('hotel.index.post4');
    }
}
