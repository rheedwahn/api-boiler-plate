<?php

namespace App\Http\Controllers\Api\Auth;

use App\Enum\UserStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
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

    private function returnToken($user, $request = null)
    {
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request && $request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    private function invalidCredentials()
    {
        return response()->json([
            'status' => 'error',
            'message' => 'email and or pasword does not match'
        ], 401);
    }

    private function inactiveUser()
    {
        return response()->json([
            'status' => 'error',
            'message' => 'Your account is inactive, please contact admin'
        ], 401);
    }
}
