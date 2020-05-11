<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\ForgotPasswordRequest;
use App\Http\Requests\Api\Auth\ResetPasswordRequest;
use App\Models\User;
use App\Notifications\SendTemporaryLinkMail;
use App\Traits\TemporaryUrlTrait;

class ForgotPasswordController extends Controller
{
    use TemporaryUrlTrait;

    public function __construct()
    {
        $this->middleware('auth:api')->only('resetPassword');
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        $this->sendUserTemporaryMail($user);
        return response()->json(['status' => 'success', 'message' => 'Please check your email for reset password link']);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $user = $request->user();
        $user->password = $request->password;
        $user->save();
        return response()->json(['status' => 'success', 'message' => 'Password set successfully']);
    }

    public function temporaryLogin(User $user)
    {
        if(!request()->hasValidSignature()) {
            $this->sendUserTemporaryMail($user);
        }
        return $this->returnToken($user);
    }

    protected function sendUserTemporaryMail($user)
    {
        $api_route_parameter = $this->getTemporaryUrl($user);
        $full_route = config('app.fronend_url').'/'.$api_route_parameter;
        $user->notify(new SendTemporaryLinkMail($full_route));
    }
}
