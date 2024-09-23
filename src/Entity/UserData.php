<?php


use Doctrine\ORM\Mapping as ORM;


class UserData
{
  private ?int $id = null;
  private string $firstName;
  private string $lastName;
  private string $email;
  private string $street;
  private string $houseNumber;
  private string $postalCode;
  private string $city;
  private string $createdAt;

  public function getId(): ?int
  {
    return $this->id;
  }


  public function getFirstName(): string
  {
    return $this->firstName;
  }

  public function setFirstName(string $firstName): void
  {
    $this->firstName = $firstName;
  }

  public function getLastName(): string
  {
    return $this->lastName;
  }

  public function setLastName(string $lastName): void
  {
    $this->lastName = $lastName;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  public function getStreet(): string
  {
    return $this->street;
  }

  public function setStreet(string $street): void
  {
    $this->street = $street;
  }

  public function getHouseNumber(): string
  {
    return $this->houseNumber;
  }

  public function setHouseNumber(string $houseNumber): void
  {
    $this->houseNumber = $houseNumber;
  }

  public function getPostalCode(): string
  {
    return $this->postalCode;
  }

  public function setPostalCode(string $postalCode): void
  {
    $this->postalCode = $postalCode;
  }

  public function getCity(): string
  {
    return $this->city;
  }

  public function setCity(string $city): void
  {
    $this->city = $city;
  }

  public function getCreatedAt(): string
  {
    return $this->createdAt;
  }

  public function setCreatedAt(string $createdAt): void
  {
    $this->createdAt = $createdAt;
  }
}

