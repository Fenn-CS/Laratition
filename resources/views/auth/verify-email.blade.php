@extends('layouts.app')

@section('content')
<div class="container-fluid content">
    <div class="card mt-dashboard">
        <div class="card-body">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>
    </div>

    @if (session('sent'))
    <div class="card mt-2">
        <div class="card-body">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    </div>
    @endif

    <div class="card mt-2 mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button class="btn btn-dashboard" type="submit">
                        {{ __('Resend Verification Email') }}
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </div>
</div>
<div class="mb-push-footer"></div>
@endsection