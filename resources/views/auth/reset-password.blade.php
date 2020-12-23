@extends('layouts.app')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="css/login-register.css">
@endsection

@section('content')

<!-- start of the login register form-->
<div id="container">
    <div id="wrapper">
        <div id="auth-box">
            <h1>Reset Password</h1>
            <form method="POST" action="#">
               @csrf
               <div class="input-con">
                    <div class="form-icon"><img src="assets/images/padlock.svg" alt=""></div><input type="password"
                        name="password" id="login-password" placeholder="Password" required>
                </div>
                <div class="input-con">
                    <div class="form-icon"><img src="assets/images/padlock.svg" alt=""></div><input type="password"
                        name="password" id="login-password" placeholder="Password" required>
                </div>
                <button>Save Password</button>
            </form>
        </div>

    </div>
</div>
<!-- end of the login register form-->
<!-- start of the footer -->
@endsection