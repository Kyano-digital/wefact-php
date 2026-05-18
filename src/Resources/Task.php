<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Task extends Resource
{
    protected function controller(): string
    {
        return 'task';
    }

    /**
     * Show a single task.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/task/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List tasks.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/task/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create a task.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/task/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update a task.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/task/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * Change the status of a task.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/task/changestatus
     */
    public function changeStatus(array $params): array
    {
        return $this->call('changestatus', $params);
    }
}
