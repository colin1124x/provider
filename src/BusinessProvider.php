<?php

namespace Rde;

abstract class BusinessProvider
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    abstract function register();

    public function boot(){}

    public function provides()
    {
        return array();
    }
}
