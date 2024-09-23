<?php
use Doctrine\ORM\Mapping as ORM;

class Categories
{
  private ?int $categoryId = null;
  private string $name;

  public function getCategoryId()
  {
    return $this->categoryId;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }





}