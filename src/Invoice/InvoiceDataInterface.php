<?php

declare(strict_types=1);

namespace Luigor\Invoice;

interface InvoiceDataInterface
{
    public function number(): string;
    public function orderNumber(): string;
}