<?php

namespace App\Http\Controllers\Gerenciador;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class GroupUserController extends AbstractController
{
    public function __construct()
    {
        $this->model = Role::class;
    }

    public function index(Request $request)
    {
        try{
            return [
                'data' => Role::all()
            ];
        }catch(\Exception $ex) {
            return $this->respondWithErrors($ex);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        return $this->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return $this->fetch($role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request,Role $role)
    {
        try{
            return $this->up($request,$role);
        }catch(\Exception $ex){
            return response()->json(['error' => ['message' => $ex->getMessage()]],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        return $this->delete($role);
    }

    /**
     * Give permission to Role.
     *
     * @param  Spatie\Permission\Models\Role  $role
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function givePermission(Role $role, Permission $permission)
    {
        try{
            $role->givePermissionTo($permission);
            return response()->json($role,201);
        }catch(\Exception $ex) {
            return response()->json(['errors' => [$ex->getMessage()]],404);
        }
    }

    /**
     * Revoke permission to Role.
     *
     * @param  Spatie\Permission\Models\Role  $role
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function revokePermission(Role $role, Permission $permission)
    {
        try{
            $role->revokePermissionTo($permission);
            return response()->json($role,200);
        }catch(\Exception $ex) {
            return response()->json(['errors' => [$ex->getMessage()]],404);
        }
    }
}
