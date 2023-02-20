<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function profile(){
       $user = [
           'Martynas',
           'martynas.kaselionis@kitm.lt',
           'Mokytojas'
       ];
        return view('profile',compact('user'));
    }

    public function index(){
        return view('welcome');
    }
}
