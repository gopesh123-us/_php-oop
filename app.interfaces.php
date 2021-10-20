<?php

//interfaces

interface PaymentInterface {
    public function payNow(); //must implement
    public function paymentProcess(); //must implement but for maintaining differences in the implementation process.
}

interface LoginInterface {
    public function loginFirst();
    public function paymentProcess();
}

class Paypal implements PaymentInterface, LoginInterface {

    public function loginFirst() { //we can certainly have our own methods
        echo "Login success!" . "<br>";
    }
    public function payNow() {
        echo "Paying with Paypal";
    }

    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements PaymentInterface, LoginInterface {

    public function loginFirst() { //we can certainly have our own methods
        echo "Login success!";
    }
    public function payNow() {
        echo "Paying with Bank";
    }

    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }
}

class Cash implements PaymentInterface {

    public function payNow() {
        echo "Paying with Cash";
    }
    public function paymentProcess() {
        $this->payNow();
    }
}

class Visa implements PaymentInterface {

    public function payNow() {
        echo "Paying with Visa";
    }
    public function paymentProcess() {
        $this->payNow();
    }
}

//class that actually does something and uses these classes above

class BuyProduct {

    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess();
    }

    public function onlinePay(LoginInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Paypal();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
