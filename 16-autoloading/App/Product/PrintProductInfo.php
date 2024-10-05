<?php

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