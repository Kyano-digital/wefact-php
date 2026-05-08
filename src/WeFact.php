<?php

namespace KyanoDigital\WeFact;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use KyanoDigital\WeFact\Exceptions\WeFactException;
use KyanoDigital\WeFact\Resources\Attachment;
use KyanoDigital\WeFact\Resources\Creditor;
use KyanoDigital\WeFact\Resources\CreditInvoice;
use KyanoDigital\WeFact\Resources\CreditInvoiceLine;
use KyanoDigital\WeFact\Resources\Debtor;
use KyanoDigital\WeFact\Resources\DebtorExtraClientContact;
use KyanoDigital\WeFact\Resources\Group;
use KyanoDigital\WeFact\Resources\Interaction;
use KyanoDigital\WeFact\Resources\Invoice;
use KyanoDigital\WeFact\Resources\InvoiceLine;
use KyanoDigital\WeFact\Resources\PriceQuote;
use KyanoDigital\WeFact\Resources\PriceQuoteLine;
use KyanoDigital\WeFact\Resources\Product;
use KyanoDigital\WeFact\Resources\Setting;
use KyanoDigital\WeFact\Resources\Subscription;
use KyanoDigital\WeFact\Resources\Task;
use KyanoDigital\WeFact\Resources\Transaction;

class WeFact
{
    protected Client $http;

    public function __construct(
        protected string $apiKey,
        protected string $baseUrl = 'https://api.mijnwefact.nl/v2/',
        protected int $timeout = 30,
    ) {
        $this->http = new Client([
            'base_uri' => $this->baseUrl,
            'timeout'  => $this->timeout,
        ]);
    }

    // ── Resources ─────────────────────────────────────────────────────────────

    public function attachments(): Attachment
    {
        return new Attachment($this);
    }
    public function creditors(): Creditor
    {
        return new Creditor($this);
    }
    public function creditInvoices(): CreditInvoice
    {
        return new CreditInvoice($this);
    }
    public function creditInvoiceLines(): CreditInvoiceLine
    {
        return new CreditInvoiceLine($this);
    }
    public function debtors(): Debtor
    {
        return new Debtor($this);
    }
    public function debtorExtraClientContacts(): DebtorExtraClientContact
    {
        return new DebtorExtraClientContact($this);
    }
    public function groups(): Group
    {
        return new Group($this);
    }
    public function interactions(): Interaction
    {
        return new Interaction($this);
    }
    public function invoices(): Invoice
    {
        return new Invoice($this);
    }
    public function invoiceLines(): InvoiceLine
    {
        return new InvoiceLine($this);
    }
    public function priceQuotes(): PriceQuote
    {
        return new PriceQuote($this);
    }
    public function priceQuoteLines(): PriceQuoteLine
    {
        return new PriceQuoteLine($this);
    }
    public function products(): Product
    {
        return new Product($this);
    }
    public function settings(): Setting
    {
        return new Setting($this);
    }
    public function subscriptions(): Subscription
    {
        return new Subscription($this);
    }
    public function tasks(): Task
    {
        return new Task($this);
    }
    public function transactions(): Transaction
    {
        return new Transaction($this);
    }

    // ── Core HTTP ─────────────────────────────────────────────────────────────

    /**
     * Send a raw request to any WeFact API endpoint.
     *
     * @param  array<string, mixed> $params
     * @return array<string, mixed>
     * @throws WeFactException
     */
    public function request(string $controller, string $action, array $params = []): array
    {
        try {
            $response = $this->http->post('', [
                'form_params' => array_merge([
                    'api_key'    => $this->apiKey,
                    'controller' => $controller,
                    'action'     => $action,
                ], $params),
            ]);
        } catch (GuzzleException $e) {
            throw new WeFactException(
                "WeFact HTTP error for {$controller}/{$action}: {$e->getMessage()}"
            );
        }

        $data = json_decode($response->getBody()->getContents(), true);

        if (($data['status'] ?? '') === 'error') {
            $errors = implode(', ', (array) ($data['errors'] ?? ['Unknown error']));
            throw new WeFactException(
                "WeFact API error for {$controller}/{$action}: {$errors}",
                $data
            );
        }

        return $data;
    }
}
