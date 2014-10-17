## rde/provider

實驗用 (參考自[illuminate](https://github.com/illuminate))

[![Build Status](https://travis-ci.org/colin1124x/provider.svg)](https://travis-ci.org/colin1124x/provider)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/colin1124x/provider/badges/quality-score.png)](https://scrutinizer-ci.com/g/colin1124x/provider)
[![Code Coverage](https://scrutinizer-ci.com/g/colin1124x/provider/badges/coverage.png)](https://scrutinizer-ci.com/g/colin1124x/provider)
[![Latest Stable Version](https://poser.pugx.org/rde/provider/v/stable.svg)](https://packagist.org/packages/rde/provider)
[![Total Downloads](https://poser.pugx.org/rde/provider/downloads.svg)](https://packagist.org/packages/rde/provider)
[![Latest Unstable Version](https://poser.pugx.org/rde/provider/v/unstable.svg)](https://packagist.org/packages/rde/provider)
[![License](https://poser.pugx.org/rde/provider/license.svg)](https://packagist.org/packages/rde/provider)

### 使用
#### 製作一個service provider

*class*
```
class MyService extends Rde\Provider
{
    public function register()
    {
        $this->app['my.service'] = function($app){
            return new ReadObject;
        };
    }
    
    public function providers()
    {
        return array('my.service');
    }
    
    // if you need...
    public function boot()
    {
        ReadObjectManager::setSomeConfig($this->app['config']['any']);
    }
}
```

```

```