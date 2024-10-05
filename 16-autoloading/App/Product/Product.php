<?php

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