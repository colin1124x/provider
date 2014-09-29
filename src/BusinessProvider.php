<?php

namespace Rde;

abstract class BusinessProvider
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function boot(){}

    abstract function register();
}
