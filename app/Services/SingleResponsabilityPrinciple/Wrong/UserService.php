<?php

namespace App\Services\SingleResponsabilityPrinciple\Wrong;

use Illuminate\Support\Facades\Auth;
use App\Notifications\RegisterUser as RegisterUserNotification;
use App\Models\User;

class UserService {

    public function registerAndNotifyAndGetAccessTokenUser(string $name, string $email, string $password): string
    {
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]); 

        $user->notify(new RegisterUserNotification($user));

        return Auth::guard('api')->login($user);
    }
}