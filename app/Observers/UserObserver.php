<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\RegisterUser as RegisterUserNotification;

class UserObserver
{
    public function created(User $user): void
    {
        $user->notify(new RegisterUserNotification($user));
    }

    public function updated(User $user): void
    {
        //
    }

    public function deleted(User $user): void
    {
        //
    }

    public function restored(User $user): void
    {
        //
    }

    public function forceDeleted(User $user): void
    {
        //
    }
}
