<?php

namespace App\Models\OpenClosedPrinciple\Wrong;

use App\Models\OpenClosedPrinciple\Bike;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoadBike extends Bike
{
    use HasFactory;

    public function upGear(): bool
    {
        return true;
    }

    public function downGear(): bool
    {
        return true;
    }
}
