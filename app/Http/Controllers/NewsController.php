<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{

    public function index()
    {
        return view('news');
    }

    public function detail($slug)
    {
        return view('news', compact('slug'));
    }

}