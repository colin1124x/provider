<?php

class ProviderTest extends PHPUnit_Framework_TestCase
{
    public function testRegister()
    {
        $app = new Rde\Application();

        $provider = new Fake\MyServiceProvider($app);

        $provider->register('x', function(){
                return new stdClass;
            });

        $this->assertTrue(isset($app['x']), '檢查服務榜定');
        $this->assertInstanceOf('stdClass', $app['x'], '檢查註冊實體');
    }

    /**
     * @expectedException badMethodCallException
     * @expectedExceptionMessageRegExp /^呼叫未定義方法 \[helloWorld\]$/
     */
    public function testException()
    {
        $app = new Rde\Application();

        $provider = new Fake\MyServiceProvider($app);

        $provider->helloWorld();
    }
}
