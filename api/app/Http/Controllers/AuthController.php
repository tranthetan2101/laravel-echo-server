<?php

namespace App\Http\Controllers;

use App\Enums\StatusCode;
use App\Exceptions\NotFoundException;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Service\Auth\AuthService;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ResponseTrait;
    protected AuthService $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * @throws NotFoundException
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = request([User::EMAIL, User::PASSWORD]);
        if(Auth::attempt($credentials)){
            return $this->responseError("Incorrect info. Please try again", StatusCode::UNAUTHENTICATED);
        }
        $accessToken = $this->authService->createToken($request);
        return $this->responseSuccess(["token" => $accessToken]);
    }


    public function logout(): JsonResponse
    {
        if(Auth::check()){
            $this->authService->deleteToken();
        }
        return $this->responseSuccess(["success" => "logout success"]);
    }
}
