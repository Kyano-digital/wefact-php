<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Setting extends Resource
{
    protected function controller(): string
    {
        return 'setting';
    }

    /**
     * List all settings.
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
     * Show a single cost category.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function showCostCategory(array $params): array
    {
        return $this->client->request('setting', 'costcategory_show', $params);
    }

    /**
     * List cost categories.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function listCostCategories(array $params = []): array
    {
        return $this->client->request('setting', 'costcategory_list', $params);
    }

    /**
     * Create a cost category.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function addCostCategory(array $params): array
    {
        return $this->client->request('setting', 'costcategory_add', $params);
    }

    /**
     * Update a cost category.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function editCostCategory(array $params): array
    {
        return $this->client->request('setting', 'costcategory_edit', $params);
    }

    /**
     * Delete a cost category.
     *
     * @param  array $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     */
    public function deleteCostCategory(array $params): array
    {
        return $this->client->request('setting', 'costcategory_delete', $params);
    }
}
