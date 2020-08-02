<?php

declare(strict_types=1);

namespace Luigor\Invoice\Biling;

abstract class BillingData implements BillingDataInterface
{
    protected string $name;
    protected string $surname;
    protected string $company;
    protected string $postalCode;
    protected string $city;
    protected string $street;
    protected string $taxNumber;

    /**
     * BillingData constructor.
     * @param string $name
     * @param string $surname
     * @param string $company
     * @param string $postalCode
     * @param string $city
     * @param string $street
     * @param string $taxNumber
     */
    public function __construct(
        string $name,
        string $surname,
        string $company,
        string $postalCode,
        string $city,
        string $street,
        string $taxNumber
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->company = $company;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->street = $street;
        $this->taxNumber = $taxNumber;
    }

    abstract public function name(): string;

    abstract public function surname(): string;

    abstract public function company(): ?string;

    abstract public function postalCode(): string;

    abstract public function city(): string;

    abstract public function street(): string;

    abstract public function taxNumber(): string;

}
