<?php

namespace App\Services\User;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UpdateService
{
    protected $data;
    protected $user;
    protected $profile;

    const USER_TABLE_COULUMNS = ['name'];
    const PROFILE_TABLE_COLUMNS = ['address', 'dob'];

    public function __construct($data, User $user, Profile $profile)
    {
        $this->data = $data;
        $this->user = $user;
        $this->profile = $profile;
    }

    public function run()
    {
        DB::transaction(function () {
            $this->updateModel($this->data, $this->user, self::USER_TABLE_COULUMNS);
            $this->updateModel($this->data, $this->profile, self::PROFILE_TABLE_COLUMNS);
        });
    }

    protected function updateModel($data, $model, $update_fields)
    {
        foreach ($update_fields as $key) {
            if (Arr::has($data, $key)) {
                $model->setAttribute($key, $data[$key]);
            }
        }
        //save will only actually save if the model has changed
        $model->save();
    }
}