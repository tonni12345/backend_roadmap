<?php

require_once "data/Product.php";

$product = new Product('Sabun', 5000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;