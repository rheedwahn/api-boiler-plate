<?php

namespace App\Models;

use App\Traits\ModelScopeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseModel extends Model
{
    use ModelScopeTrait;

    protected $guarded = [];

    public function getSlugAttribute()
    {
        return $this->name ? Str::slug($this->name) : null;
    }
}
