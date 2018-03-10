<?php
namespace	Rebing0512\OCR;

//use Rebing0512\OCR\Console\Commands\Command;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Routing\Router;


class ServiceProvider extends BaseServiceProvider{


	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{

        // $this->loadViewsFrom(realpath(__DIR__.'/../views'), 'contact');
        // 【5】视图
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'rebing0512.ocr');  //package::view

        // this  for views
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/rebing0512/ocr'),
        ], 'views');
		$this->setupRoutes($this->app->router);


		// this  for conig
        $this->publishes([
            __DIR__.'/config/rebing0512_ocr.php' => config_path('rebing0512_ocr.php'),
        ]);

//        // 注册 Artisan 命令
//        if ($this->app->runningInConsole()) {
//            $this->commands([
//                Command::class
//            ]);
//        }

	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function setupRoutes(Router $router)
	{
		$router->group(['namespace' => 'Rebing0512\OCR\Controllers'], function($router)
        {
            require __DIR__.'/routes/routes.php';
        });

	}


    /**
     * 注册配置文件
     *
     */
	public function register()
	{
		config([
		    'config/rebing0512_ocr.php',
		]);
	}


}