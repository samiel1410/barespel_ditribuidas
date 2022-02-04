
#  yuanrang/junit-laravel

这里是对于框架的介绍


# 框架的运行环境要求

Laravel >= 5.1  &&  php >= 7.2.5


# 安装方式

```sell
composer require "yuanrang/junit-laravel"
```

# 配置方式

5.5手动配置laravel 对于junit服务放到config/app.php中
```php
Yuanrang\JunitLaravel\Http\Providers\SjunitServiceProvider::class
```

# 解释路由文件
```php
Route::get('/', 'SjunitController@index');
Route::post('/', 'SjunitController@store')->name('sjunit.store');
```