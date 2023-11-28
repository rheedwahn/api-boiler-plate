<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const JWT_TOKEN_EXPIRATION = 7200;

    /**
     * @return JsonResponse
     */
    protected function resourceNotFound(): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => 'resource not found'
        ], 404);
    }

    /**
     * @return JsonResponse
     */
    protected function resourceDeleted(): JsonResponse
    {
        return response()->json(['status' => 'success', 'message' => 'resource deleted successfully'], 200);
    }

    /**
     * @param $user
     * @param $request
     * @return JsonResponse
     */
    protected function returnToken($user, $request = null): JsonResponse
    {
        if (env('AUTH_PROVIDER') === "jwt") {
            return response()->json([
                'access_token' => auth()->setTTL(self::JWT_TOKEN_EXPIRATION)->attempt(request(['email', 'password'])),
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse(
                    Carbon::now()->addSeconds(self::JWT_TOKEN_EXPIRATION)
                )->toDateTimeString()
            ]);
        } else {
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
    }
}
