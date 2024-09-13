<?php

// inheritance - solver

class Product {
	public $title, $author, $publisher, $price, $totalPage, $playTime;

	public function __construct($title = 'no-title', $author = 'no-author', $publisher = 'no-publisher', $price = 0, $totalPage = 0, $playTime = 0) {
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
		$this->totalPage = $totalPage;
		$this->playTime = $playTime;
	}

	public function getLabel() {
		$label = $this->author . ', ' . $this->publisher;
		return $label;
	}

	public function getInfoProduct () {
		$string = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $string;
	}
}

class Comic extends Product {
	public function getInfoProduct () {
		$string = "Comic : {$this->title} | {$this->getLabel()} (Rp. {$this->price}) - {$this->totalPage} Halaman";
		return $string;
	}
}

class Game extends Product {
	public function getInfoProduct () {
		$string = "Game : {$this->title} | {$this->getLabel()} (Rp. {$this->price}) - {$this->playTime} Jam";
		return $string;
	}
}

class PrintProductInfo {
	public function print(Product $product) {
		$string = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
		return $string;
	}
}

$product1 = new Comic('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100, 0);
$product2 = new Game('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 0, 50);

echo $product1->getInfoProduct();
echo PHP_EOL;
echo $product2->getInfoProduct();