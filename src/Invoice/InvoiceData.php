<?php

declare(strict_types=1);

namespace Luigor\Invoice;

class InvoiceData implements InvoiceDataInterface
{
    protected string $number;
    protected string $orderNumber;

    /**
     * InvoiceData constructor.
     * @param string $number
     * @param string $orderNumber
     */
    public function __construct(string $number, string $orderNumber)
    {
        $this->number = $number;
        $this->orderNumber = $orderNumber;
    }

    public function number(): string
    {
        return $this->number;
    }

    public function orderNumber(): string
    {
        return $this->orderNumber;
    }
}
