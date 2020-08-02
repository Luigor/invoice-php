<?php

declare(strict_types=1);

namespace Luigor\Invoice\Factory;

use Luigor\Invoice\Invoice;
use Luigor\Invoice\InvoiceBuyer;
use Luigor\Invoice\InvoiceData;
use Luigor\Invoice\InvoiceSeller;
use Luigor\Invoice\Payment\InvoicePayment;

class InvoiceFactory implements InvoiceFactoryInterface
{
    public static function create(
        InvoiceSeller $dataSeller,
        InvoiceBuyer $dataBuyer,
        InvoiceData $invoice,
        InvoicePayment $payment
    ): Invoice {
        return new Invoice($dataSeller, $dataBuyer, $invoice, $payment);
    }
}
