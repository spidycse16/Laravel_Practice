<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[PageController::class,'welcome'])->name('homepage');
//This is named argumant. Now we can use {{route('firstPage)}} in any html doc.
//we can use like <a href={{route('firstPage)}}>Pagename</a>
Route::get('/first',[PageController::class,'firstPage'])->name('firstPage');
Route::get('/second',[PageController::class,'secondPage']);
//we can pass values with the route in the view
Route::get('/newpage/{id}',[PageController::class,'newPage']);
//if user enters url like localhost/getnumber/13
// Route::get('/getnumber/{val}',[PageController::class,'getNumber']);
//optional routing parameter.
Route::get('/getnumber/{id?}/comment/{comment?}',[PageController::class,'getNumber'])->whereNumber('id');
//we can use redirect method to redirect any url to another new url
Route::redirect('/oldurl','/newpage');
