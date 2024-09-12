<?php

// object type

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

class PrintProductInfo {
	public function print(Product $product) {
		$string = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
		return $string;
	}
}

$product1 = new Product('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000);
$product2 = new Product('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000);

$productInfo = new PrintProductInfo();
echo $productInfo->print($product1);