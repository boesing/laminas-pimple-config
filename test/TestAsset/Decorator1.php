<?php

namespace ZendTest\Pimple\Config\TestAsset;

class Decorator1
{
    public $originService;

    public function __construct($service)
    {
        $this->originService = $service;
    }
}