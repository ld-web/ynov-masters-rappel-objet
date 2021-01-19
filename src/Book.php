<?php

namespace App;

class Book extends AbstractProduct implements IDisplayable
{
  private $nbPages;

  /**
   * Get the value of nbPages
   */
  public function getNbPages()
  {
    return $this->nbPages;
  }

  /**
   * Set the value of nbPages
   *
   * @return  self
   */
  public function setNbPages($nbPages)
  {
    $this->nbPages = $nbPages;

    return $this;
  }

  public function display(): void
  {
    echo "Je suis un livre de " . $this->nbPages . " pages";
  }

  public function getFullPrice(): float
  {
    return $this->price * 1.2;
  }
}
