<?php

namespace App\DTO;

use App\Traits\ToArray;

class LoginDTO
{
    use ToArray;
    
    public string $email;
    public string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
}