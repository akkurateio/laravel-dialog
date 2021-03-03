<?php

namespace Akkurate\LaravelDialog;

use Akkurate\LaravelDialog\Classes\Attachment;
use Akkurate\LaravelDialog\Classes\Field;
use Akkurate\LaravelDialog\Classes\Slack;
use Illuminate\Support\ServiceProvider;

/**
 * Config service provider
 *
 */
class LaravelDialogServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->publishes([
            __DIR__.'/../config/laravel-dialog.php' => config_path('laravel-dialog.php')
        ], 'config');
    }

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{

        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-dialog.php', 'laravel-dialog'
        );

	    $this->app->bind('slack', function() {
	        return new Slack(config('laravel-dialog.slack'));
        });

	    $this->app->bind('attachment', function() {
	        return new Attachment();
        });

	    $this->app->bind('field', function() {
	        return new Field();
        });

	}
}
