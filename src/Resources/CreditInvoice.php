<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class CreditInvoice extends Resource
{
    protected function controller(): string
    {
        return 'creditinvoice';
    }

    /**
     * Show a single credit invoice.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditinvoice/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List credit invoices.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditinvoice/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create a credit invoice.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditinvoice/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update a credit invoice.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditinvoice/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * Delete a credit invoice.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditinvoice/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }

    /**
     * Register a partial payment for a credit invoice.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditinvoice/partpayment
     */
    public function partPayment(array $params): array
    {
        return $this->call('partpayment', $params);
    }

    /**
     * Mark a credit invoice as paid.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditinvoice/markaspaid
     */
    public function markAsPaid(array $params): array
    {
        return $this->call('markaspaid', $params);
    }
}
