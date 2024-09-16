<?php

// inheritance - problem

class Product {
	public $title, $author, $publisher, $price, $totalPage, $playTime, $type;

	public function __construct($title = 'no-title', $author = 'no-author', $publisher = 'no-publisher', $price = 0, $totalPage = 0, $playTime = 0, $type) {
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
		$this->totalPage = $totalPage;
		$this->playTime = $playTime;
		$this->type = $type;
	}

	public function getLabel() {
		$label = $this->author . ', ' . $this->publisher;
		return $label;
	}

	public function getInfoProduct () {
		$string = "{$this->type} : {$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		if ($this->type == 'Comic') {
			$string = $string . " - {$this->totalPage} Pages";
		} else {
			$string = $string . " - {$this->playTime} Hours";
		}
		return $string;
	}
}

class PrintProductInfo {
	public function print(Product $product) {
		$string = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
		return $string;
	}
}

$product1 = new Product('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100, 0, 'Comic');
$product2 = new Product('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 0, 50, 'Game');

echo $product1->getInfoProduct();
echo PHP_EOL;
echo $product2->getInfoProduct();