<?php

namespace App\Models;

class Profile extends BaseModel
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
