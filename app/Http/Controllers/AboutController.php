<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "Nama : Kelompok 5 <br>
                NIM : 1234567890 <br>
                Kelas : PPLG";
    }
}
