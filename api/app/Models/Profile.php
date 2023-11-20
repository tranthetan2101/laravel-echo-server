<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public const ID = "id";
    public const FULL_NAME = "full_name";
    public const BIRTH_DAY = "birth_day";
    public const AVATAR = "avatar";
    public const GENDER = "gender";
    public const STUDENT_LEVEL = "student_level";
    public const SCHOOL = "school";
    public const USER_UID = "user_uid";
    public const CREATED_AT = "created_at";
    public const UPDATED_AT = "updated_at";

    protected $guarded = [
        self::ID
    ];
}
