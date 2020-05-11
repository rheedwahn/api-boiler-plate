<?php

namespace App\Http\Controllers\Api\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Permission\ListRequest;
use App\Http\Requests\Api\Permission\StoreRequest;
use App\Http\Requests\Api\Permission\UpdateRequest;
use App\Http\Resources\Api\Permission\PermissionResource;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function lists(ListRequest $request)
    {
        $permissions = Permission::when($request->name, function($query) use($request) {
            return $query->where('name', 'LIKE', '%'.$request->name.'%');
        })->orderBy('created_at', 'desc')->paginate(10);
        return PermissionResource::collection($permissions);
    }

    public function store(StoreRequest $request)
    {
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->guard_name = 'api';
        $permission->save();

        return new PermissionResource($permission);
    }

    public function update(UpdateRequest $request, Permission $permission)
    {
        $permission->name = $request->name;
        $permission->save();

        return new PermissionResource($permission);
    }

    public function delete(Permission $permission)
    {
        $permission->delete();
        return response()->json(['status' => 'success', 'message' => 'resource deleted successfully'], 200);
    }
}
