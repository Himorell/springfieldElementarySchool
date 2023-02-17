<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:see-role|create-role|edit-role|delete-role',['only'=>['index']]);
        $this->middleware('permission:crear-role', ['only'=>['create', 'store']]);
        $this->middleware('permission:edit-role', ['only'=>['edit', 'update']]);
        $this->middleware('permission:delete-role', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(5);
        return view('roles.index', compact('roles'));
    }

/**
 * 
 * 
 * @return \Illuminate\Http\Response
 * 
 */
public function create()
{
$permission = Permission::get();
return view ('roles.crear', compact('permission'));
}

/**
 * 
 * @param \Illuminate\http\Request $request
 * @return \Illuminate\Http\Response
 * 
 */
public function store(Request $request)
{
    $this->validate($request, ['name' =>'required', 'permission' => 'required']);
    $role = Role::create(['name'=> $request->input('name')]);
    $role->syncPermissions($request);

    return redirect()->route('roles.index');
}
/**
 * 
 * @param int $id
 * @return \Illuminate\Http\Response
 * 
 */
/**public function show($id)
{

}
/**
 * 
 * @param int $id
 * @return \Illuminate\Http\Response
 * 
 */
public function edit($id)
{
    $role = Role::find($id);
    $permission= Permission::get();
    $rolePermissions = DB::table('role_has_permissions')->where ('permission_id','role_id', $id)
    ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
    ->all();
return view('roles.edit', compact('role', 'permission', 'rolePermissions'));

}
/**
 * 
 * @param int $id
 * @return \Illuminate\Http\Response
 * 
 */ 
public function update(Request $request, $id){
    $this->validate($request, ['name' =>'required', 'permission' => 'required']);
    $role = Role::find($id);
    $role->name  = $request->input('name');
    $role->save();

    $role->syncPermissions($request->input('permission'));
    return redirect()->route('roles.index');
}
/**
 * 
 * @param int $id
 * @return \Illuminate\Http\Response
 * 
 */ 
public function destroy($id){
    DB::table('roles')->where('id', $id)->delete();
    return redirect()->route('roles.index');
}
}