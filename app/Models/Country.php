<?php

namespace App\Models;

class Country extends BaseModel
{
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
