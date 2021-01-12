@extends('layouts.app')

@section('head')
<link rel="stylesheet" type="text/css" href="css/login-register.css">
@endsection

@section('content')

<!-- start of the login register form-->
<div id="container">
    <div id="wrapper">
        <div id="auth-box">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-con @error('email') input-error @enderror">
                    <div class="form-icon"><img src="assets/images/user1.svg" alt=""></div><input type="text" name="email"  placeholder="Email" required>
                </div>

                @error('email')
                <div class="alert alert-danger text-small">
                    {{ $message }}
                </div>
                @enderror

                <div class="input-con">
                    <div class="form-icon"><img src="assets/images/padlock.svg" alt=""></div><input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="checkbox" name="remember" id="remember"><label for="remember">Keep me sign in</label>
                <button>Sign-In</button>
            </form>
        </div>

    </div>
</div>
<!-- end of the login register form-->
<!-- start of the footer -->
@endsection