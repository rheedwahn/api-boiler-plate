<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $guarded = [];

    protected $keyType = 'string';

    public $incrementing = false;

    use UuidTrait;
}
