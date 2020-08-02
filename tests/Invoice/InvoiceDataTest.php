<?php

declare(strict_types=1);

namespace Luigor\Tests\Invoice;

use Luigor\Invoice\InvoiceData;
use PHPUnit\Framework\TestCase;

final class InvoiceDataTest extends TestCase
{
    private InvoiceData $invoice;

    public function setUp(): void
    {
        $this->invoice = new InvoiceData('FV/321', 'PL999');
    }

    public function testGetNumber(): void
    {
        $this->assertSame('FV/321', $this->invoice->number());
    }

    public function testGetOrderNumber(): void
    {
        $this->assertSame('PL999', $this->invoice->orderNumber());
    }
}
