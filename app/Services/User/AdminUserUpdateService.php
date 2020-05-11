<?php

namespace App\Services\User;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminUserUpdateService extends UpdateService
{
    protected $data;
    protected $user;
    protected $profile;

    const USER_TABLE_COULUMNS = ['name', 'status'];

    public function __construct($data, User $user, Profile $profile)
    {
        parent::__construct($data, $user, $profile);
    }

    public function run()
    {
        DB::transaction(function () {
            $this->updateModel($this->data, $this->user, self::USER_TABLE_COULUMNS);
            $this->updateModel($this->data, $this->profile, self::PROFILE_TABLE_COLUMNS);
            if(isset($this->data['role'])) {
                $this->user->syncRoles([$this->data['role']]);
            }
        });
    }
}