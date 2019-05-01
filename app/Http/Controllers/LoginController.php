<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('login');
    }

    public function login(Request $request){
        if ($request->acc == 'admin' && $request->pass == 'admin'){
            return view('welcome');
        }else{
            return view('errorLogin');
        }
    }
}
