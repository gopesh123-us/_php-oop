<?php
include './abstract/paymenttypes.abstract.php';
include './classes/buyproduct.class.php';

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();
