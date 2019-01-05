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
}
