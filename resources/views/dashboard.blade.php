@extends('layouts.app')

@section('content')

<div class="container-fluid mt-dashboard">
    @if (session('verified'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Your account has been verified, you can now participate in competitions!</p>
        <!-- <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> -->
    </div>
    @endif
</div>

@endsection