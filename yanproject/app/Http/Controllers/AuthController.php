<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('pages.register');
    }
    public function welcome (Request $requet){
        $firstname = $requet->input('firstname');
        $lastname = $requet->input('lastname');
        return view('pages.welcome', ['firstname' => $firstname, 'lastname' => $lastname]);
    }
}
