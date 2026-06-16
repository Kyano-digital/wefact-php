<?php

declare(strict_types=1);

namespace KyanoDigital\WeFact;

use Illuminate\Support\ServiceProvider;

final class WeFactServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/wefact.php', 'wefact');

        $this->app->singleton(WeFact::class, function ($app): WeFact {
            /** @var \Illuminate\Contracts\Config\Repository $config */
            $config = $app['config'];

            return new WeFact(
                apiKey: (string) $config->get('wefact.api_key'),
                baseUrl: (string) $config->get('wefact.base_url'),
                timeout: (int) $config->get('wefact.timeout'),
            );
        });

        $this->app->alias(WeFact::class, 'wefact');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/wefact.php' => config_path('wefact.php'),
        ], 'wefact');
    }

    /**
     * @return array{0: class-string<WeFact>, 1: string}
     */
    public function provides(): array
    {
        return [WeFact::class, 'wefact'];
    }
}
