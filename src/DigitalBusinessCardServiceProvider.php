<?php

namespace Firumon\DigitalBusinessCard;

use Firumon\DigitalBusinessCard\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class DigitalBusinessCardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom($this->path('config','dbc.php'),'dbc');
        config(['session.driver' => 'file','cache.default' => 'file','database.default' => 'mysql']);
        config(['database.connections.mysql.engine' => 'MyISAM']);
        config(['auth.providers.users.model' => User::class]);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if($this->app->runningInConsole()){
            $this->loadMigrationsFrom($this->path('database/migrations'));
            Schema::defaultStringLength(191);
            $this->publishes([
                $this->path('public') => public_path(),
            ], 'laravel-assets');
        } else {
            $this->loadRoutesFrom($this->path('routes','web.php'));
            $this->loadViewsFrom($this->path('resources/views'),'dbc');
        }
    }

    private function path($folder,$file = null): string {
        return implode("/",array_filter([__DIR__,'..',$folder,$file]));
    }
}
