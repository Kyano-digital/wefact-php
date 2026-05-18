<?php

declare(strict_types=1);

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

final class PriceQuoteLine extends Resource
{
    protected function controller(): string
    {
        return 'pricequoteline';
    }

    /**
     * Add a line to a price quote.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/pricequoteline/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Delete a line from a price quote.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/pricequoteline/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }
}
