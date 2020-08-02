<?php

declare(strict_types=1);

namespace Luigor\Invoice\Payment;

interface InvoicePaymentInterface
{
    public function name(): string;
    public function method(): string;
}
