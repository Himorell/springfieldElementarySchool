<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Student;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $scores = Score::where('subject', '=', 'maths')->paginate();

        return view('home', compact('scores'))
            ->with('i', (request()->input('page', 1) - 1) * $scores->perPage());
    }
}
