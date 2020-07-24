<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use UuidTrait;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $guard = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
