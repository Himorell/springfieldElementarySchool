<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Student;
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

        foreach($scores as $score) {
            if ($score->mark2 && !$score->mark3) {
                $score->average = round(($score->mark1 + $score->mark2) / 2, 1);
                continue;
            }
            $score->average = round(($score->mark1 + $score->mark2 + $score->mark3) / 3, 1);
        }
        // usamos un bucle foreach para recorrer el array de puntuaciones
        // comprobamos si existe la nota 2 pero no la nota 3, en ese caso
        // hacemos media de la nota 1 y 2, seguidamente continuamos con el siguiente elemento de $scores 
        // (si es que hay) con el comando continue
        // en caso contrario hacemos la media con las 3 notas
        
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
        $students = Student::pluck('name','id');
        return view('score.create', compact('score','students'));
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
        $students = Student::pluck('name','id');

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
        $students = Student::pluck('name','id');
        return view('score.edit', compact('score', 'students'));
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
