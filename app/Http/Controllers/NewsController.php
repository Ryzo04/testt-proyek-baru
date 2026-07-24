<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index()
    {
        return "Daftar Semua Berita";
    }

    public function detail($slug)
    {
        return "Detail Berita : " . $slug;
    }
}