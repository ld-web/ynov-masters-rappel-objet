<?php

namespace App\Factory;

use App\AbstractProduct;
use App\Book;
use App\Clothing;
use App\ProductType;
use InvalidArgumentException;

class ProductFactory
{
  public function create(int $type): AbstractProduct
  {
    switch ($type) {
      case ProductType::BOOK:
        $product = new Book();
        break;
      case ProductType::CLOTHING:
        $product = new Clothing();
        break;
      default:
        throw new InvalidArgumentException('Type de produit inconnu');
    }

    return $product;
  }
}
