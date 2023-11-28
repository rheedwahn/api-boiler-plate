<?php

namespace App\Services\User;

use App\Enum\UserStatus;
use App\Libraries\Utilities;
use App\Models\User;

class RegisterService
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return User
     */
    public function run(): User
    {
        $user = new User();
        $user->name = $this->data['name'];
        $user->email = $this->data['email'];
        $user->password = $this->data['password'];
        $user->status = UserStatus::PENDING;
        $user->remember_token = Utilities::generateToken();
        $user->save();

        $user->profile()->create([]);

        //assign them a role of 'User'
        $user->assignRole('User');

        return $user;
    }
}