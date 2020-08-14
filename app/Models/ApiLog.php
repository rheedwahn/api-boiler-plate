<?php

namespace App\Models;

use App\Traits\UuidTrait;

class ApiLog extends BaseModel
{
    use UuidTrait;

    protected $keyType = 'string';
    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
