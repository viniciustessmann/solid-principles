<?php

namespace Tests\Unit\Models\OpenClosedPrinciple;

use App\Models\OpenClosedPrinciple\Correct\FixedGearBike;
use Tests\TestCase;

class FixedGearBikeTest extends TestCase
{
    public FixedGearBike $bike;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bike = new FixedGearBike();
    }

    /** @test */
    public function return_action_pedal(): void
    {   
        $this->assertEquals('pedaling', $this->bike->pedal());
    }

    /** @test */
    public function return_action_skid(): void
    {   
        $this->assertEquals('skiding', $this->bike->skid());
    }
}
