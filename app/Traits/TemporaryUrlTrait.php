<?php

namespace App\Traits;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

trait TemporaryUrlTrait
{
    protected function getTemporaryUrl($user)
    {
        $temporary_route = URL::temporarySignedRoute('user.temporary.link', now()->addHour(),[
            'user' => $user->id
        ]);
        return Str::after($temporary_route, 'api/');
    }
}