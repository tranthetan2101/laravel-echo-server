<?php

namespace App\Traits;

use App\Enums\StatusCode;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

trait ResponseTrait
{
    protected function responseSuccess($data = []): JsonResponse
    {
        return response()->json($data);
    }

    protected function responseNewResource($data): JsonResponse
    {
        return response()->json($data, StatusCode::NEW_RESOURCE);
    }

    protected function responseNoContent($headers = []): JsonResponse
    {
        return response()->json([], StatusCode::NO_CONTENT, $headers);
    }

    protected function responseError(array|string $msg, int $code): JsonResponse
    {
        if (is_array($msg)) {
            return response()->json($msg, $code);
        }
        return response()->json([
            'message' => $msg
        ], $code);
    }

    protected function responseForceBrowserDownloadFile($path, $shouldDeleteAfterSend = false, $fileName = null): BinaryFileResponse
    {
        return response()->download($path, $fileName, ['Content-Type' => 'download-me-now'])->deleteFileAfterSend($shouldDeleteAfterSend);
    }
}
