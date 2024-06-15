<?php

namespace App\Services\SingleResponsabilityPrinciple\Correct;

use App\DTO\LoginDTO;
use App\DTO\RegisterUserDTO;
use App\Models\User;
use App\Repositories\UserRepository;

class UserService {

    public function __construct(public UserRepository $userRepository) {}

    public function register(RegisterUserDTO $registerUser): User
    {
        return $this->userRepository->create($registerUser);
    }

    public function getUserByCredentials(LoginDTO $loginDTO): ?User
    {
        return $this->userRepository->findUserByCredentials($loginDTO);
    }
}