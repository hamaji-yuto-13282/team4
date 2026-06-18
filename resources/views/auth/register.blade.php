@extends('layout.auth')

@section('title', '新規登録')

@section('content')
<form method="post" action="{{ route('register') }}">
    @csrf
    <!-- こんな隠しフィールドが出力される
<!- <input type="hidden" name="_token" value="ランダムなトークン"> -->
    <!-- Laravelはroute/web.phpに定義したルートは自動でCSRF検証がされる> -->
    <div class="form-group">
        <label for="name">名前 <span class="required">*</span></label>
        <input type="text"
            name="name"
            id="name"
            value="{{ old('name') }}"
            class="form-controller @error('name') is-invalid @enderror"
            autofocus>
        @error('name')
        <div class="error-message">{{$message}}</div>
        @enderror
    </div>

    <div class="form-grop">
        <label for="email">メールアドレス <span class="required">*</span>
        </label>
        <input type="email"
            name="email"
            id="email"
            value="{{ old('email') }}"
            class="form-control" @error('email') is-invalid
              @enderror>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-grop">
        <label for="password">パスワード <span class="required">*</span>
        </label>
        <input type="password"
            name="password"
            id="password"
            value="{{ old('password') }}"
            class="form-control" @error('password') is-invalid
              @enderror>
        <small class="input-hint">
            8文字以上・大文字・小文字・数字・記号を含む
        </small>
        @error('password')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">パスワード（確認）
            <span class="required">*</span></label>
        <input type="password"
            name="password_confirmation"
            id="password_confirmation"
            class="form-control">
    </div>

    <button type="submit" class="btn-submit">登録</button>

    <div class="auth-footer">
        <p>既にアカウントをお持ちの方</p>
        <a href="#">ログインはこちら</p>
    </div>

</form>
@endsection