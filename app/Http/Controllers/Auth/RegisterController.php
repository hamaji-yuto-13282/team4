<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterReqest;
use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterReqest $request){
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated)
    }
}
