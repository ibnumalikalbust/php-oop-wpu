<?php

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