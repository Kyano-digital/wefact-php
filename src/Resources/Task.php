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
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function changeStatus(array $params): array
    {
        return $this->call('changestatus', $params);
    }
}
