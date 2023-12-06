<?php

namespace App\Exceptions;

use App\Enums\StatusCode;
use Throwable;

class InputErrorException extends AbstractException
{
    public function __construct(string $message = "Data invalid", int $statusCode = 422, ?Throwable $previous = null)
    {
        $this->message = $message;
        $this->statusCode = $statusCode;
        parent::__construct($message, $statusCode, $previous);
    }
}
