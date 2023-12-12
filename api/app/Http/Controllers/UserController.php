<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    use ResponseTrait;
    public function createUser(CreateUserRequest $request): JsonResponse
    {

    }
    public function updateUser(): JsonResponse
    {

    }
    public function getUser(): JsonResponse
    {

    }
    public function getUsers(): JsonResponse
    {

    }
}
