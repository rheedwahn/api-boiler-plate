<?php

namespace App\Services\User;

use App\Enum\UserStatus;
use App\Models\User;
use Carbon\Carbon;

class VerifyService
{
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function run(): User
    {
        $this->user->remember_token = '';
        $this->user->email_verified_at = Carbon::now();
        $this->user->status = UserStatus::ACTIVE;
        $this->user->save();

        return $this->user;
    }
}