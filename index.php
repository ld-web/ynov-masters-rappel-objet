<?php

require_once 'vendor/autoload.php';

use App\AbstractProduct;
use App\Book;
use App\Clothing;
use App\IDisplayable;

// Impossible d'instancier AbstractProduct car classe abstraite
// $product = new AbstractProduct();
// var_dump($product);

/**
 * Gets all products
 *
 * @return AbstractProduct[]
 */
function getProducts(): array
{
  return [
    new Clothing(),
    new Book(),
    new Clothing()
  ];
}

$dress = new Clothing();
var_dump($dress);

$dress
  ->setSize(39)
  ->setPrice(158);

var_dump($dress);

$book = new Book();
var_dump($book);

$products = [$dress, $book];

foreach ($products as $product) {
  if ($product instanceof IDisplayable) {
    $product->display();
  }
  echo "<br />" . $product->getFullPrice() . "<br />";
}

$productsList = getProducts();

foreach ($productsList as $product) {
  echo "Prix : " . $product->getFullPrice() . " €<br />";
}
