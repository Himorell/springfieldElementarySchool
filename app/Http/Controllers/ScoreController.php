<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class ScoreController
 * @package App\Http\Controllers
 */
class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = Score::paginate();

        return view('score.index', compact('scores'))
            ->with('i', (request()->input('page', 1) - 1) * $scores->perPage());
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSubjectScores()
    {
        $scores = Score::where('subject', '=', 'maths')->paginate();

        return view('score.index', compact('scores'))
            ->with('i', (request()->input('page', 1) - 1) * $scores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $score = new Score();
        $users = User::pluck('name','id');
        return view('score.create', compact('score','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(Score::$rules);

        $score = Score::create($request->all());
        $users = User::pluck('name','id');

        return redirect()->route('scores.index')
            ->with('success', 'Score created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $score = Score::find($id);

        return view('score.show', compact('score'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $score = Score::find($id);
        $users = User::pluck('name','id');
        return view('score.edit', compact('score', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Score $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        // request()->validate(Score::$rules);

        $score->update($request->all());

        return redirect()->route('scores.index')
            ->with('success', 'Score updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $score = Score::find($id)->delete();

        return redirect()->route('scores.index')
            ->with('success', 'Score deleted successfully');
    }
}
