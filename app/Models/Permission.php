<?php

namespace App\Models;

use App\Traits\UuidTrait;

class Permission extends \Spatie\Permission\Models\Permission
{
    protected $guarded = [];

    protected $keyType = 'string';

    public $incrementing = false;

    use UuidTrait;
}
