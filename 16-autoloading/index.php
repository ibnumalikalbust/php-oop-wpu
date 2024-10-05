<?php

// autoloading

require_once 'App/init.php';

$product1 = new Comic('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100);
$product2 = new Game('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 50);

$print = new PrintProductInfo;
$print->addProduct($product1);
$print->addProduct($product2);
echo $print->print();
new Test();