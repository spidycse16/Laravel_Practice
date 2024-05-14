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
    public function newPage($id)
    {
        return view('Pages.newpage',['id'=>$id]);
    }
    public function getNumber(string $id=null,string $comment=null)
    {
        if($id && $comment)
       { echo "$id";
        echo"<br>";
    echo "comment=".$comment;
}
        else
        {
            echo "No value passed";
        }
    }
}
