<?php

namespace App\Http\Controllers\Api\Auth;

use App\Enum\UserStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = ['email' => $request->email, 'password' => $request->password];
        if(!Auth::attempt($credentials)) {
            return $this->invalidCredentials();
        }
        $user = $request->user();
        if($user->status != UserStatus::ACTIVE) {
            return $this->inactiveUser();
        }

        $user->last_login = Carbon::now();
        $user->save();
        
        return $this->returnToken($user, $request);
    }

    /**
     * @return JsonResponse
     */
    private function invalidCredentials(): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => 'email and or password does not match'
        ], 401);
    }

    /**
     * @return JsonResponse
     */
    private function inactiveUser(): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => 'Your account is inactive, please contact admin'
        ], 401);
    }
}
