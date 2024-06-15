<?php

namespace App\Models\OpenClosedPrinciple\Correct;

use App\Models\OpenClosedPrinciple\Bike;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FixedGearBike extends Bike
{
    use HasFactory;

    public function skid(): string
    {
        return 'skiding';
    }
}
