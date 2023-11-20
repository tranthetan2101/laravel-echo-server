<?php

namespace App\Enums;

final class Role
{
    public const ADMIN = "admin";
    public const STAFF = "staff";
    public const TEACHER = "teacher";
    public const STUDENT = "student";

    public const VALUES = [
        self::ADMIN,
        self::STAFF,
        self::TEACHER,
        self::STUDENT
    ];
}
