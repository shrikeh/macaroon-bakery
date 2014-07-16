<?php

namespace spec\Shrikeh\Macaroons;

use \PhpSpec\ObjectBehavior;
use \Prophecy\Argument;

use \Shrikeh\Macaroons\Macaroon;
use \Shrikeh\Macaroons\Packet;

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

    function it_returns_a_macaroon(Packet $id, Packet $location)
    {
        

        $root = 'foo';

        $this->bake($root, $id, $location)->shouldBeAnInstanceOf('Macaroon');
    }
}
