<?php

// property & method

class Product {
	public $title = 'no-title';
	public $author = 'no-author';
	public $publisher = 'no-publisher';
	public $price = 0;

	public function getLabel() {
		$label = $this->author . ', ' . $this->publisher;
		return $label;
	}
}

$product1 = new Product();
$product1->title = 'Naruto';

$product2 = new Product();
$product2->title = 'Uncharted';
$product2->releaseDate = 2007;

$product3 = new Product();
$product3->title = 'Naruto';
$product3->author = 'Masashi Kishimoto';
$product3->publisher = 'Shonen Jump';
$product3->price = 30000;

$product4 = new Product();
$product4->title = 'Uncharted';
$product4->author = 'Neil Druckmann';
$product4->publisher = 'Sony Computer';
$product4->price = 250000;

echo 'Comic : ' . $product3->getLabel() . PHP_EOL;
echo 'Game : ' . $product4->getLabel() . PHP_EOL;