<?php

namespace App\Http\Controllers\Api\Me;

use App\Enum\UserStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\ListRequest;
use App\Http\Requests\Api\User\UpdateRequest;
use App\Http\Requests\Api\User\UpdateUserByAdminRequest;
use App\Http\Resources\Api\User\UserResource;
use App\Models\User;
use App\Services\User\AdminUserUpdateService;
use App\Services\User\UpdateService;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('role:Admin')->only(['updateUserByAdmin', 'deleteUser', 'lists']);
    }

    public function me()
    {
        return new UserResource(request()->user());
    }

    public function update(UpdateRequest $request)
    {
        $data = $request->all();
        (new UpdateService($data, $request->user(), $request->user()->profile))->run();
        return new UserResource(User::find($request->user()->id));
    }

    public function updateUserByAdmin(UpdateUserByAdminRequest $request, User $user)
    {
        $data = $request->all();
        if(isset($data['status']) && !\in_array($data['status'], UserStatus::$userStatuses)) {
            return response()->json(['status' => 'error', 'message' => 'Status not recognized'],422);
        }
        (new AdminUserUpdateService($data, $user, $user->profile))->run();
        return new UserResource(User::find($user->id));
    }

    public function deleteUser(Request $request, User $user)
    {
        if($request->user()->id === $user->id) {
            return response()->json(['status' => 'error', 'message' => 'You cannot delete yourself'], 403);
        }
        $user->delete();
        return response()->json(['status' => 'success', 'message' => 'resource deleted successfully'], 200);
    }

    public function lists(ListRequest $request)
    {
        $users = User::when($request->name, function($query) use($request) {
            return $query->where('name', 'LIKE', '%'.$request->name.'%');
        })->orderBy('created_at', 'desc')->paginate(10);
        return UserResource::collection($users);
    }

    public function logout()
    {
        $token = request()->user()->token();
        $token->revoke();
        return response()->json([
            'status' => 'success',
            'message' => 'Logged out successfully'
        ], 200);
    }
}
