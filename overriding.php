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
  public function getInfo() {
    $info = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
    return $info;
  }
}

class Comic extends Product {
  public $qtyPages;
  public function __construct($title = 'title', $author = 'author', $publisher = 'publisher', $price = 0, $qtyPages = 0) {
    parent::__construct($title, $author, $publisher, $price);
    $this->qtyPages = $qtyPages;
  }
  public function getInfo() {
    $info = "Comic : " . parent::getInfo() . " - {$this->qtyPages} Halaman";
    return $info;
  }
}

class Game extends Product {
  public $playingTimes;
  public function __construct($title = 'title', $author = 'author', $publisher = 'publisher', $price = 0, $playingTimes = 0) {
    parent::__construct($title, $author, $publisher, $price);
    $this->playingTimes = $playingTimes;
  }
  public function getInfo() {
    $info = "Game : " . parent::getInfo() . " - {$this->playingTimes} Jam";
    return $info;
  }
}

$product1 = new Comic('Naruto', 'Masashi Kishimoto', 'Shounen Jump', 30000, 100);
$product2 = new Game('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 50);
echo $product1->getInfo() . '<br>';
echo $product2->getInfo() . '<br>';

?>