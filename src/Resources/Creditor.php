<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Creditor extends Resource
{
    protected function controller(): string
    {
        return 'creditor';
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
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }
}
