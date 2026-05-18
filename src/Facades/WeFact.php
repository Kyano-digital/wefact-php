<?php

declare(strict_types=1);

namespace KyanoDigital\WeFact\Facades;

use Illuminate\Support\Facades\Facade;
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

/**
 * @method static Attachment               attachments()
 * @method static Creditor                 creditors()
 * @method static CreditInvoice            creditInvoices()
 * @method static CreditInvoiceLine        creditInvoiceLines()
 * @method static Debtor                   debtors()
 * @method static DebtorExtraClientContact debtorExtraClientContacts()
 * @method static Group                    groups()
 * @method static Interaction              interactions()
 * @method static Invoice                  invoices()
 * @method static InvoiceLine              invoiceLines()
 * @method static PriceQuote               priceQuotes()
 * @method static PriceQuoteLine           priceQuoteLines()
 * @method static Product                  products()
 * @method static Setting                  settings()
 * @method static Subscription             subscriptions()
 * @method static Task                     tasks()
 * @method static Transaction              transactions()
 * @method static array<string, mixed>     request(string $controller, string $action, array<string, mixed> $params = [])
 *
 * @see \KyanoDigital\WeFact\WeFact
 */
final class WeFact extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'wefact';
    }
}
