<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function firstPage()
    {
        return view('Pages.first');
    }
    public function secondPage()
    {
        return view('Pages.second');
    }
    public function newPage()
    {
        return view('Pages.newpage');
    }
}
