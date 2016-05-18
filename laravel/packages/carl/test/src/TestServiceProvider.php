<?php

namespace carl\test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //字面很容易理解，test值得就是第一个参数的路径！！！！
        $this->loadViewsFrom(__DIR__ . '/views', 'test');

        //php artisan vendor:publish 要用到 
        $this->publishes([
            //view发布到什么地方
            __DIR__.'/views' => base_path('resources/views/carl/test'),
            
            //config发布到什么地方
            //__DIR__.'/config/app.php' => config_path('app.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     *此处有可能需要参考fascade！！！！
     */
    public function register()
    {
        $this->app['ok'] = $this->app->share(function ($app) {
            return new ok("Net");
        });
    }
}
