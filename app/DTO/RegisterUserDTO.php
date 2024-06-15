<?php

namespace App\DTO;

use App\Traits\ToArray;

class RegisterUserDTO
{
    use ToArray;
    
    public string $name;
    public string $email;
    public string $password;

    public function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}