<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',[AuthController::class,'Showregistr'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('saveregister');
Route::get('/login', function(){
    return redirect('/');
});

Route::get('/',[AuthController::class,'Showlogin']);


Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/Logout',[AuthController::class,'logout']);


Route::get('/home', function(){
    return redirect('/index');
});
Route::get('/index',[UserController::class,'index']);




Route::group(['prefix'=>'Admin','middleware'=>['web','isAdmin']], function(){
    Route::get('/dashbaord',[AdminController::class,'dashbaord']);
    Route::get('/Brands', [AdminController::class, 'CarbrandsFrom']);
    Route::post('/Carbrands', [AdminController::class, 'Carbrands'])->name('Carbrands');
});


Route::group(['middleware'=>['web','isUser']], function(){
    Route::get('/dashbaord',[UserController::class,'dashbaord']);
});


