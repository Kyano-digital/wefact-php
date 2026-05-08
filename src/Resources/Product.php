<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Product extends Resource
{
    protected function controller(): string
    {
        return 'product';
    }

    /**
     * Show a single product.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List products.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create a product.
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
     * Update a product.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * Delete a product.
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
