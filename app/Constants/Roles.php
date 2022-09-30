<?php

namespace App\Constants;

class Roles
{
    public static $USER_ROLE_ID = 1;
    public static $OPERATOR_ROLE_ID = 2;
    public static $ADMIN_ROLE_ID = 3;

    public static $USER_ROLE = 'USER';
    public static $OPERATOR_ROLE = 'OPERATOR';
    public static $ADMIN_ROLE = 'ADMIN';

    public static function getAdminRoleId() {
        return static::$ADMIN_ROLE_ID;
    }

    public static function getOperatorRoleId() {
        return static::$OPERATOR_ROLE_ID;
    }

    public static function getUserRoleId() {
        return static::$USER_ROLE_ID;
    }
}
