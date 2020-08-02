<?php

declare(strict_types=1);

namespace Luigor\Invoice\Biling;

interface BillingDataInterface
{
    public function name(): string;
    public function surname(): string;
    public function company(): ?string;
    public function postalCode(): string;
    public function city(): string;
    public function street(): string;
    public function taxNumber(): string;
}
