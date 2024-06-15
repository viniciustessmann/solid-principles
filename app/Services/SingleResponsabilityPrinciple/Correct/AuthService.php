<?php

namespace App\Services\SingleResponsabilityPrinciple\Correct;

use App\DTO\LoginDTO;
use App\Models\User;
use App\Services\SingleResponsabilityPrinciple\Correct\UserService;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthService {

    public function __construct(private UserService $userService) {}

    public function getToken(LoginDTO $loginDTO): array
    {
        $user = $this->userService->getUserByCredentials($loginDTO);

        if (!$user) {
            throw new Exception('OPS');
        }

        return ['token' => Auth::guard('api')->login($user)];
    }
}