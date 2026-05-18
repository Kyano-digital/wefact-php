<?php

declare(strict_types=1);

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\WeFact;

abstract class Resource
{
    public function __construct(protected WeFact $client) {}

    abstract protected function controller(): string;

    /**
     * @param  array<string, mixed> $params
     * @return array<string, mixed>
     */
    protected function call(string $action, array $params = []): array
    {
        return $this->client->request($this->controller(), $action, $params);
    }
}
