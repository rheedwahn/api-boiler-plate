<?php

namespace App\Models;

use App\Traits\UuidTrait;

class ApiLog extends BaseModel
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
