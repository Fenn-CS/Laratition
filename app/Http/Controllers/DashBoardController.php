<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index() 
    {
        return view('dashboard');
    }
}
