<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Transaction extends Resource
{
    protected function controller(): string
    {
        return 'transaction';
    }

    /**
     * Show a single transaction.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/transaction/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List transactions.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/transaction/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Add a bank transaction.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/transaction/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Match a transaction to one or more invoices or credit invoices.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/transaction/match
     */
    public function match(array $params): array
    {
        return $this->call('match', $params);
    }

    /**
     * Delete a transaction.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/transaction/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }

    /**
     * Ignore a transaction.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/transaction/ignore
     */
    public function ignore(array $params): array
    {
        return $this->call('ignore', $params);
    }
}
