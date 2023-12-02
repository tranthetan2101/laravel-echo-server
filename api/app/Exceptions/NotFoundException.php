<?php

namespace App\Exceptions;

use App\Enums\StatusCode;
use Throwable;

class NotFoundException extends AbstractException
{
    public function __construct(string $message = "Not found", int $statusCode = 404, ?Throwable $previous = null)
    {
        $this->message = $message;
        $this->statusCode = $statusCode;
        parent::__construct($message, $statusCode, $previous);
    }
}
