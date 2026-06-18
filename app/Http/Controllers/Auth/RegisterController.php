<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterReqest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(RegisterReqest $request){
        // バリアフリー済みデータとして明示的に取得
        $validated = $request->validated();
        // パスワードをハッシュ化
        $validated['password'] = Hash::make($validated['password']);
        // ユーザーを生成、DBへ追加
        $user = User::create($validated);

        var_dump($user);      
        // ユーザーをログインさせる
        Auth::login($user);
        // セッション再生成
        $request->session()->regenerate();

        return redirect('/posts')->with('success', 'アカウント登録が完了しました');
    }
}
