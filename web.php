<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/home',function(Request $request){
    $name = $request->input('name');
    $pass = $request->input('password');
    if($name=='admin' && $pass=='admin'){
        return view('dashboard');
    }else{
        echo 'Incorrect password';
    }
    
});