<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
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

    public function createCompetition(Request $request)
    {
        $competition = Competition::create([]);
        return $competition;
    }

    public function competitions()
    {
        return Competition::paginate(50);
    }
}
