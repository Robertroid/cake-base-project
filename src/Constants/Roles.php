<?php


namespace App\Constants;


class Roles
{
    public const ADMIN = "ADMIN";

    /**
     * @return array[string]
     */
    public function getList() : array
    {
        return [static::ADMIN => __d("roles", "Admin")];
    }
}
