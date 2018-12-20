<?php

namespace Wgqi1126\LaravelTools\Providers;

use Illuminate\Support\ServiceProvider;
use Wgqi1126\LaravelTools\Console\Commands\Dev\ResetDb;

class LaravelToolsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * @var array
     */
    protected $commands = [
        ResetDb::class,
    ];


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
