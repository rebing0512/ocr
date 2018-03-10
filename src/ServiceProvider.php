<?php
namespace ReBing0512\Ocr;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Routing\Router;
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    public function boot()
    {
        // this for views
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'rebing0512.ocr');
        // this for route
        $this->setupRoutes($this->app->router);
        // this for conig
        $this->publishes([
            __DIR__.'/config/rebing0512_ocr.php' => config_path('rebing0512_ocr.php'),
        ]);
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'ReBing0512\Ocr\Http\Controllers'], function($router)
        {
            require __DIR__ . '/routes/routes.php';
        });
    }

    public function register()
    {
        $this->registerContact();
        config([
            'config/rebing0512_ocr.php',
        ]);
    }

}
