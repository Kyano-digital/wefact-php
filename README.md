# kyano-digital/wefact-php

A complete PHP client for the [WeFact API](https://developer.wefact.com) — covers all resources and every documented action. Works with Laravel (via ServiceProvider + Facade) and plain PHP.

## Installation

```bash
composer require kyano-digital/wefact-php
```

### Laravel setup

Laravel auto-discovers the ServiceProvider and Facade. Publish the config:

```bash
php artisan vendor:publish --tag=wefact-config
```

Add your API key to `.env`:

```env
WEFACT_API_KEY=your-api-key-here
```

### Plain PHP setup

```php
use Kyano\WeFact\WeFact;

$wefact = new WeFact(apiKey: 'your-api-key-here');
```
