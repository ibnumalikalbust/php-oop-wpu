<?php

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