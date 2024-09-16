<?php

// constructor

class Product {
	public $title, $author, $publisher, $price;

	public function __construct($title = 'no-title', $author = 'no-author', $publisher = 'no-publisher', $price = 0) {
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	public function getLabel() {
		$label = $this->author . ', ' . $this->publisher;
		return $label;
	}
}

$product1 = new Product('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000);
$product2 = new Product('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000);
$product3 = new Product('Dragon Ball');

echo 'Comic : ' . $product1->getLabel() . PHP_EOL;
echo 'Game : ' . $product2->getLabel() . PHP_EOL;
echo 'Comic : ' . $product3->getLabel() . PHP_EOL;