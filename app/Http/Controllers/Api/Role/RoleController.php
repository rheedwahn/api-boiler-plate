<?php

namespace App\Http\Controllers\Api\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Role\AssignPermissionRequest;
use App\Http\Requests\Api\Role\ListRequest;
use App\Http\Requests\Api\Role\StoreRequest;
use App\Http\Requests\Api\Role\UpdateRequest;
use App\Http\Resources\Api\Role\RoleResource;
use App\Models\Role;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('role:Admin');
    }

    /**
     * @param ListRequest $request
     * @return AnonymousResourceCollection
     */
    public function lists(ListRequest $request): AnonymousResourceCollection
    {
        $roles = Role::when($request->name, function($query) use($request) {
            return $query->where('name', 'LIKE', '%'.$request->name.'%');
        })->orderBy('created_at', 'desc')->paginate(10);
        return RoleResource::collection($roles);
    }

    /**
     * @param StoreRequest $request
     * @return RoleResource
     */
    public function store(StoreRequest $request): RoleResource
    {
        $role = new Role();
        $role->name = $request->name;
        $role->guard_name = 'api';
        $role->save();

        return new RoleResource($role);
    }

    /**
     * @param UpdateRequest $request
     * @param Role $role
     * @return RoleResource
     */
    public function update(UpdateRequest $request, Role $role): RoleResource
    {
        $role->name = $request->name;
        $role->save();

        return new RoleResource($role);
    }

    /**
     * @param Role $role
     * @return JsonResponse
     */
    public function delete(Role $role): JsonResponse
    {
        $role->delete();
        return $this->resourceDeleted();
    }

    /**
     * @param AssignPermissionRequest $request
     * @param Role $role
     * @return RoleResource
     */
    public function assignPermissions(AssignPermissionRequest $request, Role $role): RoleResource
    {
        $role->syncPermissions($request->permissions);
        return new RoleResource(Role::find($role->id));
    }
}
