<?php

namespace App\Repositories;

use App\DTO\LoginDTO;
use App\DTO\RegisterUserDTO;
use App\Models\User;

class UserRepository
{
    public function create(RegisterUserDTO $registerUserDTO): User
    {
        return User::create($registerUserDTO->toArray());
    }

    public function findUserByCredentials(LoginDTO $loginDTO): ?User
    {
        return User::whereEmail($loginDTO->email)
            ->wherePassword($loginDTO->password)
            ->first();
    }
}