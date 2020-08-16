<?php

namespace App\Traits;

trait ModelScopeTrait
{
    public function scopeOrderNameByAsc($query)
    {
        return $query->orderBy('name', 'asc');
    }
}
