<?php

namespace Tests\Unit\Services\SingleResponsabilityPrinciple\Wrong;

use App\Models\User;
use App\Services\SingleResponsabilityPrinciple\Wrong\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    //use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->service = app(UserService::class);
    }

    /** @test */
    public function register_notify_and_login_user(): void
    {   
        $user = User::factory()->raw();

        $accessToken = $this->service->registerAndNotifyAndGetAccessTokenUser(
            $user['name'],
            $user['email'],
            '123'
        );

        $this->assertisString($accessToken);
        $this->assertDatabaseHas('users', [
            'email' => $user['email']
        ]);
    }
}
