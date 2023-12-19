<?php

class Product {
  public $title, $author, $publisher, $price, $qtyPages, $playingTimes, $type;
  public function __construct($title = 'title', $author = 'author', $publisher = 'publisher', $price = 0, $qtyPages = 0, $playingTimes = 0, $type) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->price = $price;
    $this->qtyPages = $qtyPages;
    $this->playingTimes = $playingTimes;
    $this->type = $type;
  }
  public function getLabel() {
    return "$this->author, $this->publisher";
  }
  public function getInfo() {
    $info = "{$this->type} : {$this->title} | {$this->getLabel()} (Rp. {$this->price})";
    if ($this->type == 'Comic') {
      $info .= " - {$this->qtyPages} Halaman";
    } else if ($this->type == 'Game') {
      $info .= " - {$this->playingTimes} Jam"; 
    }
    return $info;
  }
}

class PrintInfo {
  public function print(Product $product) {
    $info = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
    return $info;
  }
}

$product1 = new Product('Naruto', 'Masashi Kishimoto', 'Shounen Jump', 30000, 100, 0, 'Comic');
$product2 = new Product('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 0, 50, 'Game');

echo $product1->getInfo() . '<br>';
echo $product2->getInfo() . '<br>';

?>