<?php

namespace App\Library;

class PermissionTag
{
    public const PERMISSION_FOR_SUPER_ADMIN = 'permission-for-super-admin';

    public const PERMISSION_FOR_ADMIN = 'permission-for-admin';

    public static function getAllPermissions()
    {
        return [
            self::PERMISSION_FOR_SUPER_ADMIN,
            self::PERMISSION_FOR_ADMIN
        ];
    }
}
