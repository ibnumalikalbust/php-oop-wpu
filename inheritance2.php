<?php

class Product {
  public $title, $author, $publisher, $price, $qtyPages, $playingTimes;
  public function __construct($title = 'title', $author = 'author', $publisher = 'publisher', $price = 0, $qtyPages = 0, $playingTimes = 0) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->price = $price;
    $this->qtyPages = $qtyPages;
    $this->playingTimes = $playingTimes;
  }
  public function getLabel() {
    return "$this->author, $this->publisher";
  }
  public function getInfo() {
    $info = "{$this->type} : {$this->title} | {$this->getLabel()} (Rp. {$this->price})";
    return $info;
  }
}

class Comic extends Product {
  public function getInfo() {
    $info = "Comic : {$this->title} | {$this->getLabel()} (Rp. {$this->price}) - {$this->qtyPages} Halaman";
    return $info;
  }
}

class Game extends Product {
  public function getInfo() {
    $info = "Game : {$this->title} | {$this->getLabel()} (Rp. {$this->price}) - {$this->playingTimes} Jam";
    return $info;
  }
}

$product1 = new Comic('Naruto', 'Masashi Kishimoto', 'Shounen Jump', 30000, 100, 0);
$product2 = new Game('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 0, 50);

echo $product1->getInfo() . '<br>';
echo $product2->getInfo() . '<br>';

?>