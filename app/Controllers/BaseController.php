<?php

namespace Talentowo\Controllers;

class BaseController
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container; 
    }
}