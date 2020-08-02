<?php

declare(strict_types=1);

namespace Luigor\Invoice;

use Luigor\Invoice\Payment\InvoicePayment;

class Invoice implements InvoiceInferface
{
    protected InvoiceSeller $seller;
    protected InvoiceBuyer $buyer;
    protected InvoiceData $invoice;
    protected InvoicePayment $payment;

    /**
     * Invoice constructor.
     * @param InvoiceSeller $dataSeller
     * @param InvoiceBuyer $dataBuyer
     * @param InvoiceData $invoice
     * @param InvoicePayment $payment
     */
    public function __construct(
        InvoiceSeller $dataSeller,
        InvoiceBuyer $dataBuyer,
        InvoiceData $invoice,
        InvoicePayment $payment
    ) {
        $this->seller = $dataSeller;
        $this->invoice = $invoice;
        $this->buyer = $dataBuyer;
        $this->payment = $payment;
    }

    public function seller(): InvoiceSeller
    {
        return $this->seller;
    }

    public function buyer(): InvoiceBuyer
    {
        return $this->buyer;
    }

    public function invoice(): InvoiceData
    {
        return $this->invoice;
    }

    public function payment(): InvoicePayment
    {
        return $this->payment;
    }
}
