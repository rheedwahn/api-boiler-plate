<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Locality extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
