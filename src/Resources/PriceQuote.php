<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class PriceQuote extends Resource
{
    protected function controller(): string
    {
        return 'pricequote';
    }

    /**
     * Show a single price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List price quotes.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create a price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update a price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * Delete a price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }

    /**
     * Send a price quote by email.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/sendbyemail
     */
    public function sendByEmail(array $params): array
    {
        return $this->call('sendbyemail', $params);
    }

    /**
     * Download a price quote as PDF.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/download
     */
    public function download(array $params): array
    {
        return $this->call('download', $params);
    }

    /**
     * Schedule a price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/schedule
     */
    public function schedule(array $params): array
    {
        return $this->call('schedule', $params);
    }

    /**
     * Cancel a scheduled price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/cancel-schedule
     */
    public function cancelSchedule(array $params): array
    {
        return $this->call('cancelschedule', $params);
    }

    /**
     * Accept a price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/accept
     */
    public function accept(array $params): array
    {
        return $this->call('accept', $params);
    }

    /**
     * Decline a price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/decline
     */
    public function decline(array $params): array
    {
        return $this->call('decline', $params);
    }

    /**
     * Archive a price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/archive
     */
    public function archive(array $params): array
    {
        return $this->call('archive', $params);
    }

    /**
     * Sort the lines of a price quote.
     *
     * @param  array  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/pricequote/sortlines
     */
    public function sortLines(array $params): array
    {
        return $this->call('sortlines', $params);
    }
}
