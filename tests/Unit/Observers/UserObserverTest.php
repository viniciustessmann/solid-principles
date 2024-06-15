<?php

namespace Tests\Unit\Observers;

use App\Models\User;
use App\Notifications\RegisterUser as RegisterUserNotification;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class UserObserverTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function send_notify_create_user(): void
    {   
        Notification::fake();

        $user = User::factory()->create();

        Notification::assertSentTo(
            [$user], RegisterUserNotification::class
        );
    }
}
