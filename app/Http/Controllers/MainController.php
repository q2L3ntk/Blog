<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function articles()
    {
        return view('last-articles');
    }

    public function archive()
    {
        return view('archive');
    }
}
