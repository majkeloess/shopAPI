<?php

class Product
{
  private ?int $id = null;
  private string $name;
  private string $description;
  private float $price;
  private string $image;
  private int $categoryId;
  private string $createdAt;
  private ?string $updatedAt = null;

  public function getId(): ?int
  {
    return $this->id;
  }


  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): void
  {
    $this->price = $price;
  }

  public function getImage(): string
  {
    return $this->image;
  }

  public function setImage(string $image): void
  {
    $this->image = $image;
  }

  public function getCategoryId(): int
  {
    return $this->categoryId;
  }

  public function setCategoryId(int $categoryId): void
  {
    $this->categoryId = $categoryId;
  }

  public function getCreatedAt(): string
  {
    return $this->createdAt;
  }

  public function setCreatedAt(string $createdAt): void
  {
    $this->createdAt = $createdAt;
  }

  public function getUpdatedAt(): ?string
  {
    return $this->updatedAt;
  }

  public function setUpdatedAt(?string $updatedAt): void
  {
    $this->updatedAt = $updatedAt;
  }
}
