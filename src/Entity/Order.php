<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity=Customer::class, inversedBy="orders")
     */
    public $customer_name;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="orders")
     */
    public $product_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCustomerName(): ?Customer
    {
        return $this->customer_name;
    }

    public function setCustomerName(?Customer $customer_name): self
    {
        $this->customer_name = $customer_name;

        return $this;
    }

    public function getProductName(): ?Product
    {
        return $this->product_name;
    }

    public function setProductName(?Product $product_name): self
    {
        $this->product_name = $product_name;

        return $this;
    }
    public function __toString() 
    {
        return (string) $this->name; 
    }
}
