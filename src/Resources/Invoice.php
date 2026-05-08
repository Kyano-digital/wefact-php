<?php

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

class Invoice extends Resource
{
    protected function controller(): string
    {
        return 'invoice';
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

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function credit(array $params): array
    {
        return $this->call('credit', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function partPayment(array $params): array
    {
        return $this->call('partpayment', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function markAsPaid(array $params): array
    {
        return $this->call('markaspaid', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function markAsUnpaid(array $params): array
    {
        return $this->call('markasunpaid', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function sendByEmail(array $params): array
    {
        return $this->call('sendbyemail', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function sendReminderByEmail(array $params): array
    {
        return $this->call('sendreminderbyemail', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function sendSummationByEmail(array $params): array
    {
        return $this->call('sendsummationbyemail', $params);
    }

    /**
     * Returns base64-encoded PDF in response['invoice']['PDF'].
     *
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function download(array $params): array
    {
        return $this->call('download', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function block(array $params): array
    {
        return $this->call('block', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function unblock(array $params): array
    {
        return $this->call('unblock', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function schedule(array $params): array
    {
        return $this->call('schedule', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function cancelSchedule(array $params): array
    {
        return $this->call('cancelschedule', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function pausePaymentProcess(array $params): array
    {
        return $this->client->request('invoice', 'payment-process/pause', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function reactivatePaymentProcess(array $params): array
    {
        return $this->client->request('invoice', 'payment-process/reactivate', $params);
    }

    /**
     * @param  array $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function sortLines(array $params): array
    {
        return $this->call('sortlines', $params);
    }
}
