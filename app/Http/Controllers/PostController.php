<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post1()
    {
        return view('post1');
    }
    public function post2()
    {
        return view('post2');
    }
    public function post3()
    {
        return view('post3');
    }
    public function post4()
    {
        return view('post4');
    }
}
