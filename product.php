<?php

class Product {
  public $title = 'title';
  public $author = 'author';
  public $publisher = 'publisher';
  public $price = 0;

  public function sayHello() {
    return 'Hello World';
  }

  public function getLabel() {
    return "$this->author, $this->publisher";
  }
};

$product1 = new Product();
$product1->title = 'Naruto';
var_dump($product1);

echo '<br><br>';

$product2 = new Product();
$product2->title = 'Uncharted';
var_dump($product2);

echo '<br><br>';

$product3 = new Product();
$product3->title = 'Naruto';
$product3->author = 'Masashi Kishimoto';
$product3->publisher = 'Shonen Jump';
$product3->price = 30000;
var_dump($product3);

echo '<br><br>';

echo "Komik : $product3->author, $product3->publisher";

echo '<br><br>';

echo $product3->sayHello();

echo '<br><br>';

echo 'Komik : ' . $product3->getLabel();

echo '<br><br>';

$product4 = new Product();
$product4->title = 'Uncharted';
$product4->author = 'Neil Druckman';
$product4->publisher = 'Sony Computer';
$product4->price = 250000;
var_dump($product4);

echo '<br><br>';

echo 'Game : ' . $product4->getLabel();

?>