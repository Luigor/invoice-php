<?php

declare(strict_types=1);

namespace Luigor\Invoice;

use Luigor\Invoice\Biling\BillingData;

class InvoiceSeller extends BillingData
{
    public function name(): string
    {
        return $this->name;
    }

    public function surname(): string
    {
        return $this->surname;
    }

    public function company(): ?string
    {
        return $this->company;
    }

    public function postalCode(): string
    {
        return $this->postalCode;
    }

    public function city(): string
    {
        return $this->city;
    }

    public function street(): string
    {
        return $this->street;
    }

    public function taxNumber(): string
    {
        return $this->taxNumber;
    }
}
