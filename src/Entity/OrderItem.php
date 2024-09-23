<?php

class OrderItem
{
  private ?int $id = null;
  private int $orderId;
  private int $productId;
  private int $quantity;
  private float $price;

  public function getId(): ?int
  {
    return $this->id;
  }


  public function getOrderId(): int
  {
    return $this->orderId;
  }

  public function setOrderId(int $orderId): void
  {
    $this->orderId = $orderId;
  }

  public function getProductId(): int
  {
    return $this->productId;
  }

  public function setProductId(int $productId): void
  {
    $this->productId = $productId;
  }

  public function getQuantity(): int
  {
    return $this->quantity;
  }

  public function setQuantity(int $quantity): void
  {
    $this->quantity = $quantity;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): void
  {
    $this->price = $price;
  }
}

