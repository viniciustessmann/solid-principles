<?php

namespace Tests\Unit\Models\OpenClosedPrinciple;

use App\Models\OpenClosedPrinciple\Wrong\RoadBike;
use Tests\TestCase;

class RoadBikeTest extends TestCase
{
    public RoadBike $bike;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bike = new RoadBike();
    }

    /** @test */
    public function return_action_pedal(): void
    {   
        $this->assertEquals('pedaling', $this->bike->pedal());
    }

    /** @test */
    public function return_bool_up_gear(): void
    {   
        $this->assertIsBool($this->bike->upGear());
    }

    /** @test */
    public function return_bool_down_gear(): void
    {   
        $this->assertIsBool($this->bike->downGear());
    }
}
