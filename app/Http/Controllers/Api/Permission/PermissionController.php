<?php

namespace App\Http\Controllers\Api\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Permission\ListRequest;
use App\Http\Requests\Api\Permission\StoreRequest;
use App\Http\Requests\Api\Permission\UpdateRequest;
use App\Http\Resources\Api\Permission\PermissionResource;
use App\Models\Permission;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PermissionController extends Controller
{
    /**
     * @param ListRequest $request
     * @return AnonymousResourceCollection
     */
    public function lists(ListRequest $request): AnonymousResourceCollection
    {
        $permissions = Permission::when($request->name, function($query) use($request) {
            return $query->where('name', 'LIKE', '%'.$request->name.'%');
        })->orderBy('created_at', 'desc')->paginate(10);
        return PermissionResource::collection($permissions);
    }

    /**
     * @param StoreRequest $request
     * @return PermissionResource
     */
    public function store(StoreRequest $request): PermissionResource
    {
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->guard_name = 'api';
        $permission->save();

        return new PermissionResource($permission);
    }

    /**
     * @param UpdateRequest $request
     * @param Permission $permission
     * @return PermissionResource
     */
    public function update(UpdateRequest $request, Permission $permission): PermissionResource
    {
        $permission->name = $request->name;
        $permission->save();

        return new PermissionResource($permission);
    }

    /**
     * @param Permission $permission
     * @return JsonResponse
     */
    public function delete(Permission $permission): JsonResponse
    {
        $permission->delete();
        return $this->resourceDeleted();
    }
}
