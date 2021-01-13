@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

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

<div id="app">
<router-view></router-view>
</div>

@endsection

@push('scripts')
 <script src="{{ asset('js/app.js') }}"></script>
@endpush