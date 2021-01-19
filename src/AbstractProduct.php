<?php

namespace App;

abstract class AbstractProduct
{
  use NameTrait;
  protected $price;

  public function __construct(float $price = 10)
  {
    $this->name = "Coucou";
    $this->price = $price;
  }

  /**
   * Get the value of price
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }

  abstract public function getFullPrice(): float;
}
