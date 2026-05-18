<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Attachment extends Resource
{
    protected function controller(): string
    {
        return 'attachment';
    }

    /**
     * Add an attachment to a resource.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditor/attachment/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Delete an attachment from a resource.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditor/attachment/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }

    /**
     * Download an attachment from a resource.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/creditor/attachment/download
     */
    public function download(array $params): array
    {
        return $this->call('download', $params);
    }
}
