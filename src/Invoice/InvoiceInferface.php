<?php

declare(strict_types=1);

namespace Luigor\Invoice;

use Luigor\Invoice\Payment\InvoicePayment;

interface InvoiceInferface
{
    public function seller(): InvoiceSeller;
    public function buyer(): InvoiceBuyer;
    public function invoice(): InvoiceData;
    public function payment(): InvoicePayment;
}