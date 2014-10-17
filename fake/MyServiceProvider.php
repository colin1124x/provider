<?php namespace Fake;

use Rde\Provider;

class MyServiceProvider extends Provider
{
    /**
     * 方便測試多重註冊
     * @param null $access
     * @param null $builder
     */
    public function register($access = null, $builder = null)
    {
        $this->app[$access] = $builder;
    }
}
