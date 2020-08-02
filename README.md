# Invoice
> Creating an invoice document using PHP

## Technologies
* PHP 7.4

## Available methods
InvoiceFactory::create()

## Code Examples
Full example avilable in example.php
```
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
```

## Status
Project is: in progress

To-do list:
* creating Item class
* creating a class to display a document in HTML, CSV, PDF
* data validation for each method

## Licence
MIT