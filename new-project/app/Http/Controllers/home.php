<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index()
    {
        return view('index/index');
    }

    public function features()
    {
        return view('features/features');
    }

    public function pricing()
    {
        return view('pricing/pricing');
    }

    public function contact()
    {
        return view('contact/contact');
    }


}
