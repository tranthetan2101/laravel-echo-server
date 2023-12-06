<?php
namespace App\Repositories\User;

use App\Exceptions\NotFoundException;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserRepository
{
    /**
     * @param string $email
     * @return Model
     * @throws NotFoundException
     */
    public function getByEmail(string $email): Model
    {
        $user = User::query()->where(User::EMAIL, $email)->first();
        if(!isset($user)){
            throw new NotFoundException("User_not_found");
        }
        return $user;
    }
}
