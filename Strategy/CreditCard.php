<?php


class CreditCard implements PaymentInterface
{
    protected $credit_card_number;

    public function __construct($credit_card_number)
    {
        $this->credit_card_number = $credit_card_number;
    }

    public function pay($amount)
    {
        echo "Amount $amount has been payment by Credit Card {$this->credit_card_number}".PHP_EOL;
    }
}