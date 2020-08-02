<?php

declare(strict_types=1);

namespace Luigor\Tests\Invoice;

use Luigor\Invoice\InvoiceSeller;
use PHPUnit\Framework\TestCase;

final class InvoiceSellerTest extends TestCase
{
    private InvoiceSeller $seller;

    public function setUp(): void
    {
        $dataSeller = [
            'Jan',
            'Kowalski',
            'Example Company',
            '00-000',
            'Warszawa',
            'Dowolna 90',
            'PL000000001',
        ];

        $this->seller = new InvoiceSeller(...$dataSeller);
    }


    public function testGetStreet(): void
    {
        $this->assertEquals('Dowolna 90', $this->seller->street());
    }

    public function testGetCity(): void
    {
        $this->assertEquals('Warszawa', $this->seller->city());
    }

    public function testGetName(): void
    {
        $this->assertEquals('Jan', $this->seller->name());
    }

    public function testGetTaxNumber(): void
    {
        $this->assertEquals('PL000000001', $this->seller->taxNumber());
    }

    public function testGetPostalCode(): void
    {
        $this->assertEquals('00-000', $this->seller->postalCode());
    }

    public function testGetCompany(): void
    {
        $this->assertEquals('Example Company', $this->seller->company());
    }

    public function testGetSurname(): void
    {
        $this->assertEquals('Kowalski', $this->seller->surname());
    }
}
