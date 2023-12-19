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

$product1 = new Product('Naruto', 'Masashi Kishimoto', 'Shounen Jump', 30000);
$product2 = new Product('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000);
$product3 = new Product('Dragon Ball', 'Akira Toriyama');
echo 'Komik : ' . $product1->getLabel() . '<br>';
echo 'Game : ' . $product2->getLabel() . '<br>';
echo 'Komik : ' . $product3->getLabel() . '<br>';

?>