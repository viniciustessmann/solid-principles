<?php

namespace Tests\Unit\Services\SingleResponsabilityPrinciple\Correct;

use App\DTO\LoginDTO;
use App\DTO\RegisterUserDTO;
use App\Models\User;
use App\Notifications\RegisterUser as RegisterUserNotification;
use App\Services\SingleResponsabilityPrinciple\Correct\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->service = app(UserService::class);
    }

    /** @test */
    public function register_user(): void
    {   
        $user = User::factory()->raw();

        $registerUserDTO = new RegisterUserDTO(
            $user['name'],
            $user['email'],
            '123'
        );

        $this->assertInstanceOf(
            User::class,
            $this->service->register($registerUserDTO)
        );
    }

    /** @test */
    public function return_user_by_credentials(): void
    {
        $userFactory = User::factory()->create();

        $loginDTO = new LoginDTO(
            $userFactory->email,
            $userFactory->password
        );

        $user = $this->service->getUserByCredentials($loginDTO);

        $this->assertEquals($userFactory->email, $user->email);
    }
}
