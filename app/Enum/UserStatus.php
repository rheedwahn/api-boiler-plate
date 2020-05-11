<?php

namespace App\Enum;

class UserStatus
{
    const ACTIVE = 'active';
    const PENDING = 'pending';
    const DISABLE = 'disable';

    public static $userStatuses = [
        self::ACTIVE, self::DISABLE, self::PENDING
    ];
}