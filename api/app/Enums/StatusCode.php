<?php

namespace App\Enums;

class StatusCode
{
    public const SUCCESS = 200;
    public const NEW_RESOURCE = 201;
    public const NO_CONTENT = 204;
    public const BAD_REQUEST = 400;
    public const UNAUTHENTICATED = 401;
    public const UNAUTHORIZED = 403;
    public const NOT_FOUND = 404;
    public const ACCESS_NOT_ALLOWED = 405;
    public const UNPROCESSABLE_ENTITY = 422;
    public const INTERNAL_SERVER_ERROR = 500;
}
