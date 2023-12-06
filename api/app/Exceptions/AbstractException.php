<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

abstract class AbstractException extends Exception implements Responsable
{
    protected $message;
    protected int $statusCode;
    public function __construct(string $message = "Server error", int $statusCode = 500, ?Throwable $previous = null)
    {
        $this->message = $message;
        $this->statusCode = $statusCode;
        parent::__construct($message, $statusCode, $previous);
    }

    /**
     * Create an HTTP response that represents the object.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function toResponse($request): JsonResponse
    {
        return response()->json(['message' => $this->getMessage()], $this->getCode());
    }
}
