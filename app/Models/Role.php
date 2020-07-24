<?php

namespace App\Models;

use App\Traits\UuidTrait;

class Role extends \Spatie\Permission\Models\Role
{
    protected $guarded = [];

    protected $keyType = 'string';

    public $incrementing = false;

    use UuidTrait;
}
