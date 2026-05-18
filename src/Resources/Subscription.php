<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Subscription extends Resource
{
    protected function controller(): string
    {
        return 'subscription';
    }

    /**
     * Show a single subscription.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/subscription/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List subscriptions.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/subscription/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create a subscription.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/subscription/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update a subscription.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/subscription/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * Terminate a subscription.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/subscription/terminate
     */
    public function terminate(array $params): array
    {
        return $this->call('terminate', $params);
    }
}
