<?php
namespace App\Service\Auth;

use App\Exceptions\NotFoundException;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @throws NotFoundException
     */
    public function createToken($request): string
    {
        $user = $this->userRepository->getByEmail($request->email);
        return $user->createToken('Token')->accessToken;
    }

    public function deleteToken(): void
    {
        Auth::user()->AauthAcessToken()->delete();
    }
}
