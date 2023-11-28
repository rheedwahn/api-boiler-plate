<?php

namespace App\Http\Controllers\Api\Auth;

use App\Enum\UserStatus;
use App\Events\NewUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Resources\Api\User\UserResource;
use App\Libraries\Utilities;
use App\Models\User;
use App\Services\User\RegisterService;
use App\Services\User\VerifyService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * @param RegisterRequest $request
     * @return UserResource
     */
    public function register(RegisterRequest $request): UserResource
    {
        DB::transaction(function() use($request, &$user) {
            //create a new user
            $user = (new RegisterService($request->all()))->run();

            //dispatch an event to send email to user to verify account
            event(new NewUser($user));
        });        
        return new UserResource($user);
    }

    /**
     * @param $token
     * @return UserResource|JsonResponse
     */
    public function verify($token): JsonResponse|UserResource
    {
        $user = User::where('remember_token', $token)->first();
        if($user) {
            $user = (new VerifyService($user))->run();
            return new UserResource($user);
        }
        return $this->resourceNotFound();
    }
}
