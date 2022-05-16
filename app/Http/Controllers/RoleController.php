<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\RoleHasPermissions;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::whereRaw(1);
        $roles = $roles->paginate(10);
        $viewData = [
            'roles' => $roles,
        ];
        return view('role.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'web',
            'description' => $request->description,
        ]);

        $permission = $request->input('role');
        $role->givePermissionTo($permission);
        return redirect()
            ->back()
            ->with('success', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $role = Role::find($id);
        $permissions = Permission::all();
        $roleHasPermission = RoleHasPermissions::where('role_id', $id)->get();
        $plucked = $roleHasPermission->pluck('permission_id')->all();
        $viewData = [
            'role' => $role,
            'permissions' => $permissions,
            'roleHasPermission' => $roleHasPermission,
            'plucked' => $plucked,
        ];

        return view('role.update', $viewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->description = $request->description;
        $permission = $request->input('role');
        $role->syncPermissions($permission);
        $role->givePermissionTo($permission);
        $role->save();
        return redirect()
            ->back()
            ->with('success', 'Cập nhập thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
