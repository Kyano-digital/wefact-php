<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Group extends Resource
{
    protected function controller(): string
    {
        return 'group';
    }

    /**
     * Show a single group.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/group/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List groups.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/group/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create a group.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/group/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update a group.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/group/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * Delete a group.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/group/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }
}
