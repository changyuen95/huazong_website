<?php

namespace App\Library;

class RoleTag
{
    public const SUPER_ADMIN = 'super-admin';

    public const ADMIN = 'admin';

    public static function getAllAdmin(): array
    {
        return [
            self::ADMIN,
            self::SUPER_ADMIN
        ];
    }
}
