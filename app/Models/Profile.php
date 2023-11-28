<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
