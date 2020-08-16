<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseModel extends Model
{
    protected $guarded = [];

    public function getSlugAttribute()
    {
        return $this->name ? Str::slug($this->name) : null;
    }
}
