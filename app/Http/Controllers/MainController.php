<?php

namespace App\Http\Controllers;

use App\Renter;

class MainController extends Controller
{
    public function showHome()
    {
        return view('index');
    }

    public function showAbout()
    {
        return view('about');
    }
}