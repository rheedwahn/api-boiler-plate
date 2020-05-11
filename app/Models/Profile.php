<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guard = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
