<?php

namespace Shrikeh\Macaroons;

use \Pimple\Container;

class Bakery extends Container
{
    public function __construct(array $values = array())
    {
        $this['chunkFactory'] = function($c) {
            return new \Shrikeh\Macaroons\Data\ChunkFactory();
        };
    }
}
