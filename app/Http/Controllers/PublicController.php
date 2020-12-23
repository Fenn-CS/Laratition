<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function competitions()
    {
        return view('competitions');
    }

    public function competition()
    {
        return view('competition');
    }
    public function submissions()
    {
        return view('submissions');
    }
    public function submission()
    {
        return view('submission');
    }
    public function leaderboard()
    {
        return view('leaderboard');
    }
    public function community()
    {
        return view('community');
    }
    public function mentors()
    {
        return view('mentors');
    }
    public function mentor()
    {
        return view('mentor');
    }
}
