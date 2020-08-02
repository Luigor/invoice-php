<?php

declare(strict_types=1);

namespace Luigor\Invoice\Factory;

use Luigor\Invoice\InvoiceBuyer;
use Luigor\Invoice\InvoiceData;
use Luigor\Invoice\InvoiceInferface;
use Luigor\Invoice\InvoiceSeller;
use Luigor\Invoice\Payment\InvoicePayment;

interface InvoiceFactoryInterface
{
    public static function create(
        InvoiceSeller $dataSeller,
        InvoiceBuyer $dataBuyer,
        InvoiceData $invoice,
        InvoicePayment $payment
    ): InvoiceInferface;
}
