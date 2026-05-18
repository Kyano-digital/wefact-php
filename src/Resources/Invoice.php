<?php

declare(strict_types=1);

namespace KyanoDigital\WeFact\Resources;

use KyanoDigital\WeFact\Exceptions\WeFactException;

final class Invoice extends Resource
{
    protected function controller(): string
    {
        return 'invoice';
    }

    /**
     * Show a single invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/show
     */
    public function show(array $params): array
    {
        return $this->call('show', $params);
    }

    /**
     * List invoices.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/list
     */
    public function list(array $params = []): array
    {
        return $this->call('list', $params);
    }

    /**
     * Create an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/add
     */
    public function add(array $params): array
    {
        return $this->call('add', $params);
    }

    /**
     * Update an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/edit
     */
    public function edit(array $params): array
    {
        return $this->call('edit', $params);
    }

    /**
     * Delete an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/delete
     */
    public function delete(array $params): array
    {
        return $this->call('delete', $params);
    }

    /**
     * Credit an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/credit
     */
    public function credit(array $params): array
    {
        return $this->call('credit', $params);
    }

    /**
     * Register a partial payment for an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/partpayment
     */
    public function partPayment(array $params): array
    {
        return $this->call('partpayment', $params);
    }

    /**
     * Mark an invoice as paid.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/markaspaid
     */
    public function markAsPaid(array $params): array
    {
        return $this->call('markaspaid', $params);
    }

    /**
     * Mark an invoice as unpaid.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/markasunpaid
     */
    public function markAsUnpaid(array $params): array
    {
        return $this->call('markasunpaid', $params);
    }

    /**
     * Send an invoice by email.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/sendbyemail
     */
    public function sendByEmail(array $params): array
    {
        return $this->call('sendbyemail', $params);
    }

    /**
     * Send an invoice reminder by email.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/sendreminderbyemail
     */
    public function sendReminderByEmail(array $params): array
    {
        return $this->call('sendreminderbyemail', $params);
    }

    /**
     * Send an invoice summation by email.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/sendsummationbyemail
     */
    public function sendSummationByEmail(array $params): array
    {
        return $this->call('sendsummationbyemail', $params);
    }

    /**
     * Download an invoice as PDF.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/download
     */
    public function download(array $params): array
    {
        return $this->call('download', $params);
    }

    /**
     * Block an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/block
     */
    public function block(array $params): array
    {
        return $this->call('block', $params);
    }

    /**
     * Unblock an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/unblock
     */
    public function unblock(array $params): array
    {
        return $this->call('unblock', $params);
    }

    /**
     * Schedule an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/schedule
     */
    public function schedule(array $params): array
    {
        return $this->call('schedule', $params);
    }

    /**
     * Cancel a scheduled invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/cancel-schedule
     */
    public function cancelSchedule(array $params): array
    {
        return $this->call('cancelschedule', $params);
    }

    /**
     * Pause the payment process of an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/payment-process/pause
     */
    public function pausePaymentProcess(array $params): array
    {
        return $this->client->request('invoice', 'payment-process/pause', $params);
    }

    /**
     * Reactivate the payment process of an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/payment-process/reactivate
     */
    public function reactivatePaymentProcess(array $params): array
    {
        return $this->client->request('invoice', 'payment-process/reactivate', $params);
    }

    /**
     * Sort the lines of an invoice.
     *
     * @param  array<string, mixed>  $params
     *
     * @return array<string, mixed>
     *
     * @throws WeFactException
     *
     * @see https://developer.wefact.com/invoice/sortlines
     */
    public function sortLines(array $params): array
    {
        return $this->call('sortlines', $params);
    }
}
