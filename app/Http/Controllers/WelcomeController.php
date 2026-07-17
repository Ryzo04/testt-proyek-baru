<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // Tambahkan fungsi ini
    public function hello()
    {
        return "Hello World";
    }
}
