<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::all();
        return view('dashboard.role.index',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permission=Permission::all()->pluck(value:'name', key:'id');
        return view('dashboard.role.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role= Role::create($request->only('name'));
        $role->permissions()->sync($request->input('permission',[]));
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $role->load('permissions');
        $permission = Permission::all()->pluck('name', 'id');
        return view('dashboard/role/edit', compact('role','permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role->update($request->only('name'));
        $role->permissions()->sync($request->input('permission', []));
        return redirect()->route('dashboard.role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rol=Role::find($id);
        DB::table('roles')->where('id',$id)->delete();
        return redirect()->route("role.index");
    }
}
