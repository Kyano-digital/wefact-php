<?php

namespace KyanoDigital\WeFact;

use Illuminate\Support\ServiceProvider;

class WeFactServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/wefact.php', 'wefact');

        $this->app->singleton(WeFact::class, fn($app) => new WeFact(
            apiKey: $app['config']['wefact.api_key'],
            baseUrl: $app['config']['wefact.base_url'],
            timeout: $app['config']['wefact.timeout'],
        ));

        $this->app->alias(WeFact::class, 'wefact');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/wefact.php' => config_path('wefact.php'),
        ], 'wefact-config');
    }

    public function provides(): array
    {
        return [WeFact::class, 'wefact'];
    }
}
