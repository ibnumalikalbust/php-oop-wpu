<?php

class Product {
  public $title, $author, $publisher, $price;

  public function __construct($title = 'title', $author = 'author', $publisher = 'publisher', $price = 0) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->price = $price;
  }

  public function getLabel() {
    return "$this->author, $this->publisher";
  }
};

class PrintInfo {
  public function print(Product $product) {
    $info = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
    return $info;
  }
};

$product1 = new Product('Naruto', 'Masashi Kishimoto', 'Shounen Jump', 30000);
$product2 = new Product('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000);
echo 'Komik : ' . $product1->getLabel() . '<br>';
echo 'Game : ' . $product2->getLabel() . '<br>';

$infoProduct1 = new PrintInfo();
echo $infoProduct1->print($product1);

?>