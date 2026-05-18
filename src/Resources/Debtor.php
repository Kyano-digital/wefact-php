<?php

declare(strict_types=1);

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

final class Debtor extends Resource
{
    protected function controller(): string
    {
        return 'debtor';
    }

    /**
     * Show a single debtor.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/debtor/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List debtors.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/debtor/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create a debtor.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/debtor/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update a debtor.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/debtor/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }
}
