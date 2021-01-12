@extends('layouts.app')

@section('head')
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
                    <div class="form-icon"><img src="assets/images/user1.svg" alt=""></div><input type="text"
                        name="email" id="login-user" placeholder="Email" required>
                </div>
                <button>Send email</button>
            </form>
        </div>

    </div>
</div>
<!-- end of the login register form-->
<!-- start of the footer -->
@endsection