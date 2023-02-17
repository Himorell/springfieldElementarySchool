<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        function __construct()
        {
                $this->middleware('permission:see-users|create-users|edit-users|delete-users')->only('index');
                $this->middleware('permission:create-users', ['only'=>['create', 'store']]);
                $this->middleware('permission:edit-users', ['only'=>['edit', 'update']]);
                $this->middleware('permission:delete-users', ['only'=>['destroy']]);
        }

    public function index()
    {
        $users = User::paginate(5);
            return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        
        return view('users.create', compact('roles'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|same:confirm-password',
            'roles => required'
    ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user -> assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'user created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email,'.$id,
            'password'=> 'same:confirm-password',
            'roles => required'
    ]);
    
    $input= $request->all();
    if (!empty($input['password'])){
        $input['password']= Hash::make($input['password']);
    }else{
            $input = Arr::except($input, array('password'));
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
    
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
