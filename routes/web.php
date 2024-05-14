<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[PageController::class,'welcome']);
Route::get('/first',[PageController::class,'firstPage']);
Route::get('/second',[PageController::class,'secondPage']);
Route::get('/newpage',[PageController::class,'newPage']);
