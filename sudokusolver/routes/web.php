<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/solve',function(){
    return view('pages.sudokusolver');
});
Route::get('/profile',function(){
    return view('pages.contact');
});
Route::get('/about',function(){
    return view('pages.about');
});