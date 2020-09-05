<?php

namespace App\Models;

class City extends BaseModel
{
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
}
