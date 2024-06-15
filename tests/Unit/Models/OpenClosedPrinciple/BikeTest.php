<?php

namespace Tests\Unit\Models\OpenClosedPrinciple;

use App\Models\OpenClosedPrinciple\Bike;
use Tests\TestCase;

class BikeTest extends TestCase
{
    public Bike $bike;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bike = new Bike();
    }

    /** @test */
    public function return_action_pedal(): void
    {   
        $this->assertEquals('pedaling', $this->bike->pedal());
    }
}
