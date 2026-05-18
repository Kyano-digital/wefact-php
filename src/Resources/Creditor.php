<?php

declare(strict_types=1);

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

final class Creditor extends Resource
{
    protected function controller(): string
    {
        return 'creditor';
    }

    /**
     * Show a single creditor.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditor/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List creditors.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditor/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create a creditor.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditor/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update a creditor.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditor/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * Delete a creditor.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditor/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }
}
