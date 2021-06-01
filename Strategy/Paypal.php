<?php


class Paypal implements PaymentInterface
{
    protected $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function pay($amount)
    {
        echo "Amount $amount has been payment by Paypal {$this->email}".PHP_EOL;

    }
}