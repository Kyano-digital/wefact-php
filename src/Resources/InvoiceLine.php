<?php

declare(strict_types=1);

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

final class InvoiceLine extends Resource
{
    protected function controller(): string
    {
        return 'invoiceline';
    }

    /**
     * Add a line to an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/invoiceline/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Delete a line from an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/invoiceline/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }
}
