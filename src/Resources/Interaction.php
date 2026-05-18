<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Interaction extends Resource
{
    protected function controller(): string
    {
        return 'interaction';
    }

    /**
     * Show a single interaction.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/interaction/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List interactions.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/interaction/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create an interaction.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/interaction/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update an interaction.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/interaction/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }
}
