<?php

// interface

interface ProductInfo {
	public function getProductInfo ();
}

abstract class Product {
	protected $title, $author, $publisher, $price, $discount;

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

	abstract public function getInfo ();

	public function setTitle ($title) {
		$this->title = $title;
		return $this->title; 
	}

	public function getTitle () {
		return $this->title; 
	}

	public function setAuthor ($author) {
		$this->author = $author;
		return $this->author;
	}

	public function getAuthor () {
		return $this->author; 
	}

	public function setPublisher ($publisher) {
		$this->publisher = $publisher;
		return $this->publisher; 
	}

	public function getPublisher () {
		return $this->publisher; 
	}

	public function setPrice($price = 0) {
		$this->price = $price;
		return $this->price;
	}

	public function setDiscount($discount = 0) {
		$this->discount = $discount;
		return $this->discount;
	}
	
	public function getPriceBeforeDiscount() {
		return $this->price;
	}

	public function getDiscount() {
		return $this->discount;
	}

	public function getPriceAfterDiscount () {
		return $this->price - $this->discount;
	}
}

class Comic extends Product implements ProductInfo {
	public $totalPage;

	public function __construct($title = 'no-title', $author = 'no-author', $publisher = 'no-publisher', $price = 0, $totalPage = 0) {
		parent::__construct($title, $author, $publisher, $price);
		$this->totalPage = $totalPage;
	}

	public function getInfo () {
		$string = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $string;
	}

	public function getProductInfo () {
		$string = "Comic : " . $this->getInfo() . " - {$this->totalPage} Halaman";
		return $string;
	}
}

class Game extends Product implements ProductInfo {
	public $playTime;

	public function __construct($title = 'no-title', $author = 'no-author', $publisher = 'no-publisher', $price = 0, $playTime = 0) {
		parent::__construct($title, $author, $publisher, $price);
		$this->playTime = $playTime;
	}

	public function getInfo () {
		$string = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $string;
	}

	public function getProductInfo () {
		$string = "Game : " . $this->getInfo() . " - {$this->playTime} Jam";
		return $string;
	}
}

class PrintProductInfo {
	public $products = [];

	public function addProduct (Product $product) {
		$this->products[] = $product;
	}

	public function print() {
		$string = 'PRODUCTS LIST :' . PHP_EOL;
		foreach ($this->products as $product) {
			$string = $string . "{$product->getProductInfo()}" . PHP_EOL;
		}
		return $string;
	}
}

$product1 = new Comic('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100);
$product2 = new Game('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 50);

$print = new PrintProductInfo;
$print->addProduct($product1);
$print->addProduct($product2);
echo $print->print();