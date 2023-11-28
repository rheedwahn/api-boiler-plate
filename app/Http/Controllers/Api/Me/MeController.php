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
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('role:Admin')->only(['updateUserByAdmin', 'deleteUser', 'lists']);
    }

    /**
     * @return UserResource
     */
    public function me(): UserResource
    {
        return new UserResource(request()->user());
    }

    /**
     * @param UpdateRequest $request
     * @return UserResource
     */
    public function update(UpdateRequest $request): UserResource
    {
        $data = $request->all();
        (new UpdateService($data, $request->user(), $request->user()->profile))->run();
        return new UserResource(User::find($request->user()->id));
    }

    /**
     * @param UpdateUserByAdminRequest $request
     * @param User $user
     * @return UserResource|JsonResponse
     */
    public function updateUserByAdmin(UpdateUserByAdminRequest $request, User $user): JsonResponse|UserResource
    {
        $data = $request->all();
        if(isset($data['status']) && !\in_array($data['status'], UserStatus::$userStatuses)) {
            return response()->json(['status' => 'error', 'message' => 'Status not recognized'],422);
        }
        (new AdminUserUpdateService($data, $user, $user->profile))->run();
        return new UserResource(User::find($user->id));
    }

    /**
     * @param Request $request
     * @param User $user
     * @return JsonResponse
     */
    public function deleteUser(Request $request, User $user): JsonResponse
    {
        if($request->user()->id === $user->id) {
            return response()->json(['status' => 'error', 'message' => 'You cannot delete yourself'], 403);
        }
        $user->delete();
        return $this->resourceDeleted();
    }

    /**
     * @param ListRequest $request
     * @return AnonymousResourceCollection
     */
    public function lists(ListRequest $request): AnonymousResourceCollection
    {
        $users = User::when($request->name, function($query) use($request) {
            return $query->where('name', 'LIKE', '%'.$request->name.'%');
        })->orderBy('created_at', 'desc')->paginate(10);
        return UserResource::collection($users);
    }

    /**
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        $token = request()->user()->token();
        $token->revoke();
        return response()->json([
            'status' => 'success',
            'message' => 'Logged out successfully'
        ], 200);
    }
}
