<?php

namespace App\Http\Controllers\Api\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Role\AssignPermissionRequest;
use App\Http\Requests\Api\Role\ListRequest;
use App\Http\Requests\Api\Role\StoreRequest;
use App\Http\Requests\Api\Role\UpdateRequest;
use App\Http\Resources\Api\Role\RoleResource;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('role:Admin');
    }

    public function lists(ListRequest $request)
    {
        $roles = Role::when($request->name, function($query) use($request) {
            return $query->where('name', 'LIKE', '%'.$request->name.'%');
        })->orderBy('created_at', 'desc')->paginate(10);
        return RoleResource::collection($roles);
    }

    public function store(StoreRequest $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->guard_name = 'api';
        $role->save();

        return new RoleResource($role);
    }

    public function update(UpdateRequest $request, Role $role)
    {
        $role->name = $request->name;
        $role->save();

        return new RoleResource($role);
    }

    public function delete(Role $role)
    {
        $role->delete();
        return response()->json(['status' => 'success', 'message' => 'resource deleted successfully'], 200);
    }

    public function assignPermissions(AssignPermissionRequest $request, Role $role)
    {
        $role->syncPermissions($request->permissions);
        return new RoleResource(Role::find($role->id));
    }
}
