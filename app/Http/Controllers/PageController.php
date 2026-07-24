<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function index()
    {
        return "Hi! Selamat Datang di Website Laravel";
    }

    public function about()
    {
        return "Nama : Kelompok 5 <br>
                NIM : 1234567890 <br>
                Kelas : PPLG";
    }

    public function articles($id)
    {
        return "Ini adalah halaman Artikel dengan Id: " . $id;
    }
}
