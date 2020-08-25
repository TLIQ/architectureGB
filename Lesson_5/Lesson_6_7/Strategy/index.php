<?php

require_once 'billing/Billing.php';
require_once 'billing/Kiwi.php';
require_once 'billing/WebMoney.php';
require_once 'billing/YandexMoney.php';
require_once 'shop/ISocks.php';
require_once 'shop/SocksPrice.php';
require_once 'Shop.php';

$phone = '891727439';

$shop = new Shop();
$shop->addSocks(new SocksPrice());
$shop->addSocks(new SocksPrice());
$shop->addSocks(new SocksPrice());
$shop->addSocks(new SocksPrice()); //400

$shop->payment(new Kiwi(300), $phone);

$shop->payment(new YandexMoney(2000), $phone);

$shop->payment(new WebMoney(100), $phone);

