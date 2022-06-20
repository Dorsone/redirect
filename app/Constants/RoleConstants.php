<?php

namespace App\Constants;

class RoleConstants
{
    const SUPERADMIN = 0;
    const ADMIN = 1;
    const MODERATOR = 2;
    const USER = 3;

    const ROLES = [self::ADMIN, self::MODERATOR, self::USER];
}
