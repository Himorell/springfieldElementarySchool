<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

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

    function __construct()
    {
            $this->middleware('permission:see-score|create-score|edit-score|delete-score')->only('index');
            $this->middleware('permission:crear-score', ['only'=>['create', 'store']]);
            $this->middleware('permission:edit-score', ['only'=>['edit', 'update']]);
            $this->middleware('permission:delete-score', ['only'=>['destroy']]);
    }
    public function index()
    {
        $currentUserRol = \Illuminate\Support\Facades\Auth::user()->roles[0]->name;
        $currentUserId = \Illuminate\Support\Facades\Auth::user()->id;
        $scores = DB::table('scores')
            ->join('users', 'scores.users_id', '=', 'users.id')
            ->select('scores.*', 'users.name')
            ->paginate(5);

    if($currentUserRol == 'Students') {
        $scores = DB::table('scores')
            ->join('users', 'scores.users_id', '=', 'users.id')
            ->select('scores.*', 'users.name')
            ->where('scores.users_id', '=', $currentUserId)
            ->paginate(5);
    }

    return view('scores.index', compact('scores'));
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
        $usersAll = User::all();
        $users = [];
        foreach ($usersAll as $user) {
            $permission = array_keys($user->roles->pluck('name', 'name')->all(), 'Students');
            if (count($permission) > 0) {
                array_push($users, $user);
            }
    }
        return view('scores.create', compact('users'))
        ->with('success', 'Score created successfully.');
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

        request()-> validate ([
            'users_id'=> 'required',
            'academicYear'=> 'required',
            'course'=> 'required',
            'subject' => 'required',
            'quarter'=> 'required'
        ]);
        Score::create($request->all());
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
    public function edit(Score $score)
    {

        return view('scores.edit', compact('score'));

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
    request()->validate([
        'id'=> 'required',
        'academicYear'=> 'required',
        'course'=> 'required',
        'subject' => 'required',
        'quarter'=> 'required'
]);
$score->update($request->all());
return redirect()->route('scores.index')
->with('success', 'Score updated successfully');

}

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Score $score)
    {
        
        $score->delete();
        return redirect()->route('scores.index')
        ->with('success', 'Score deleted successfully');

    }
}
