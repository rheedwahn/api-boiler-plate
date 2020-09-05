<?php

namespace App\Models;

class Locality extends BaseModel
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
