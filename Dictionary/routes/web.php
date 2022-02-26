<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('translate', function () {
    return view('translate');
});
Route::post('display', function (\Illuminate\Http\Request $request) {
    $dictionary = ["house"=>"Nha","car"=>"oto","school"=>"Truong hoc"];
    if (array_key_exists($request->eng,$dictionary)){
        $eng = $request->eng;
        $vn = $dictionary[$request->eng];
        return view('display', compact(['eng','vn']));
    }else{
        echo "Tu nay chua cap nhap";
    }
});
