<?php

declare(strict_types=1);

namespace Luigor\Invoice\Payment;

class InvoicePayment implements InvoicePaymentInterface
{
    protected string $name;
    protected string $method;

    /**
     * InvoicePayment constructor.
     * @param string $name
     * @param string $method
     */
    public function __construct(string $name, string $method)
    {
        $this->name = $name;
        $this->method = $method;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function method(): string
    {
        return $this->method;
    }
}
