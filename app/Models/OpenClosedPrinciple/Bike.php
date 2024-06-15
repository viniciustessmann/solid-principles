<?php

namespace App\Models\OpenClosedPrinciple;

use App\Interfaces\RideInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model implements RideInterface
{
    use HasFactory;

    public function pedal(): string
    {
        return 'pedaling';
    }
}
