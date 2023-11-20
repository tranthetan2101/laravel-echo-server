<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public const UID = "uid";
    public const PHONE_NUMBER = "PHONE_NUMBER";
    public const EMAIL_VERIFIED = "email_verified";
    public const EMAIL = "email";
    public const EMAIL_VERIFIED_AT = "email_verified_at";
    public const PASSWORD = "password";
    public const STATUS = "status";
    public const CREATED_AT = "created_at";
    public const UPDATED_AT = "updated_at";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        self::PHONE_NUMBER,
        self::EMAIL,
        self::PASSWORD,
        self::STATUS
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
