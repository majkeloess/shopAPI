<?php

class Order
{
  private ?int $id = null;
  private int $userId;
  private string $status; // ENUM('pending', 'processing', 'shipped', 'completed', 'cancelled')
  private float $totalPrice;
  private string $createdAt;
  private ?string $updatedAt = null;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function setId(?int $id): void
  {
    $this->id = $id;
  }


  public function getUserId(): int
  {
    return $this->userId;
  }

  public function setUserId(int $userId): void
  {
    $this->userId = $userId;
  }

  public function getStatus(): string
  {
    return $this->status;
  }

  public function setStatus(string $status): void
  {
    $this->status = $status;
  }

  public function getTotalPrice(): float
  {
    return $this->totalPrice;
  }

  public function setTotalPrice(float $totalPrice): void
  {
    $this->totalPrice = $totalPrice;
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

