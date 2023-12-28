<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashbaord(){
        return view('User.dashbaord');
    }



    public function index(){
        return view('Guest.home');
    }
}
