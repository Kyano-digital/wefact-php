<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class DebtorExtraClientContact extends Resource
{
    protected function controller(): string
    {
        return 'extraclientcontact';
    }

    /**
     * Add an extra contact to a debtor.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/debtor/extraclientcontact/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update an extra contact.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/debtor/extraclientcontact/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * Delete an extra contact.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/debtor/extraclientcontact/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }
}
