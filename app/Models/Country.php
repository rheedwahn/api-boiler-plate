<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends BaseModel
{
    /**
     * @return HasMany
     */
    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }
}
