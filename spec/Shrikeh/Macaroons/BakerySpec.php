<?php

namespace spec\Shrikeh\Macaroons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BakerySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Shrikeh\Macaroons\Bakery');
    }

    function it_returns_a_chunkfactory()
    {
        $this['chunkFactory']->shouldBeAnInstanceOf('\Shrikeh\Macaroons\Data\ChunkFactory');
    }
}
