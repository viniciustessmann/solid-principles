<?php

namespace Tests\Unit\Services\SingleResponsabilityPrinciple\Correct;

use App\DTO\LoginDTO;
use App\Models\User;
use App\Services\SingleResponsabilityPrinciple\Correct\AuthService;
use App\Services\SingleResponsabilityPrinciple\Correct\UserService;
use Exception;
use Tests\TestCase;

class AuthServiceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->authService = app(AuthService::class);

        $this->userService = app(UserService::class);
    }

    /** @test */
    public function return_token(): void
    {
        $user = User::factory()->create();

        $loginDTO = new LoginDTO(
            $user->email,
            $user->password
        );

        $token = $this->authService->getToken($loginDTO);

        $this->assertArrayhasKey('token', $token);
    }

    /** @test */
    public function return_unauthorize_exception(): void
    {
        $this->expectException(Exception::class);

        $user = User::factory()->make();

        $loginDTO = new LoginDTO(
            $user->email,
            $user->password
        );

        $this->authService->getToken($loginDTO);
    }
}
