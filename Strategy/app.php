<?php

include "PaymentInterface.php";
include 'Paypal.php';
include 'CreditCard.php';

class Dummy {


    function  pay(PaymentInterface $paymentMethod,$amount){
                    $paymentMethod->pay($amount);
    }

}



$Cart = new Dummy();

$CC     = new CreditCard('4021454415454');
$Paypal = new Paypal('iramirez@viva.com.do');

$Cart->pay($Paypal,50);