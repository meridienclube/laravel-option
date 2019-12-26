<?php

namespace ConfrariaWeb\Option\Providers;

use ConfrariaWeb\Option\Contracts\OptionGroupContract;
use ConfrariaWeb\Option\Repositories\OptionGroupRepository;
use ConfrariaWeb\Option\Services\OptionGroupService;
use Illuminate\Support\ServiceProvider;
use ConfrariaWeb\Option\Contracts\OptionContract;
use ConfrariaWeb\Option\Repositories\OptionRepository;
use ConfrariaWeb\Option\Services\OptionService;

class OptionServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        //$this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Databases/Migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../Translations', 'option');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'option');
        $this->publishes([__DIR__ . '/../../config/cw_option.php' => config_path('cw_option.php')], 'config');
    }

    public function register()
    {
        $this->app->bind(OptionContract::class, OptionRepository::class);
        $this->app->bind('OptionService', function ($app) {
            return new OptionService($app->make(OptionContract::class));
        });

        $this->app->bind(OptionGroupContract::class, OptionGroupRepository::class);
        $this->app->bind('OptionGroupService', function ($app) {
            return new OptionGroupService($app->make(OptionGroupContract::class));
        });
    }


}
