<?php

namespace ZendTest\Pimple\Config\TestAsset;

use Psr\Container\ContainerInterface;

class Decorator2Factory
{
    public function __invoke($service, ContainerInterface $container, $name)
    {
        return new Decorator2($service);
    }
}
