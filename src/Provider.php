<?php

namespace Rde;

abstract class Provider
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    abstract public function register();

    public function provides()
    {
        return array();
    }

    /**
     * 攔截錯誤呼叫
     *
     * @param $method
     * @param $args
     * @throws \BadMethodCallException
     */
    public function __call($method, $args)
    {
        if ($method == 'boot') return;

        throw new \BadMethodCallException("呼叫未定義方法 [{$method}]");
    }
}
