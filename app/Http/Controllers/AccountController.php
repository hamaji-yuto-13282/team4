<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        return view('login');
    }

    public function signup(RegisterRequest $request)
    {
        $errorList = ['エラーいっぱいあるよ'];
        return view('accountform',['errorList' => $errorList]);
    }

    
    public function createUser(Request $request) {

        $name = $request->input('name');
        $address = $request->input('address');
        $tel = $request->input('tel');
        $email = $request->input('email');
        $password = $request->input('password');


        return view('login');
    }
}
