<?php

declare(strict_types=1);

use Luigor\Invoice\InvoiceSeller;
use Luigor\Invoice\InvoiceBuyer;
use Luigor\Invoice\InvoiceData;
use Luigor\Invoice\Payment\InvoicePayment;
use Luigor\Invoice\Factory\InvoiceFactory;

require __DIR__ . '/vendor/autoload.php';

$dataSeller = [
    'Jan',
    'Kowalski',
    'company',
    '00-000',
    'Warszawa',
    'Dowolna 90',
    'PL000000001',
];

$dataBuyer = [
    'Krzysztof',
    'Nabywca',
    '',
    '00-999',
    'Odludzie',
    'Gdańska 90/9',
    '',
];

$dataInvoice = [
    'PL/11/07/2020/991',
    'FV/PL/11/07/2020/7841'
];

$paymentData = [
    'Przelew błyskawiczny',
    'Bank',
];

$seller = new InvoiceSeller(...$dataSeller);
$buyer = new InvoiceBuyer(...$dataBuyer);
$invoice = new InvoiceData(...$dataInvoice);
$payment = new InvoicePayment(...$paymentData);

$invoiceFactory = InvoiceFactory::create($seller, $buyer, $invoice, $payment);
var_dump($invoiceFactory);
