<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class Role extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    public const ID = "id";
    public const NAME = "name";
    public const DESCRIPTION = "description";

    protected $guarded = [
        self::ID
    ];
}
