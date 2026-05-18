<?php

declare(strict_types=1);

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

final class CreditInvoiceLine extends Resource
{
    protected function controller(): string
    {
        return 'creditinvoiceline';
    }

    /**
     * Add a line to a credit invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditinvoice/creditinvoiceline/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Delete a line from a credit invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditinvoice/creditinvoiceline/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }
}
