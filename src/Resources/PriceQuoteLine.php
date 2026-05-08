<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class PriceQuoteLine extends Resource
{
    protected function controller(): string
    {
        return 'pricequoteline';
    }

    /**
     * Add a line to a price quote.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Delete a line from a price quote.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }
}
