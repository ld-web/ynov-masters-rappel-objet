<?php

namespace App;

class Clothing extends AbstractProduct
{
  private $size;

  public function __construct()
  {
    parent::__construct();
    $this->name .= " - Vêtement";
  }

  /**
   * Get the value of size
   */
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set the value of size
   *
   * @return  self
   */
  public function setSize($size)
  {
    $this->size = $size;

    return $this;
  }

  public function getFullPrice(): float
  {
    return $this->price * 1.05;
  }
}
