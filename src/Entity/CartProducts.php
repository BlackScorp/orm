<?php


namespace BlackScorp\ORM\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class CartProducts
 * @package BlackScorp\ORM\Entity
 * @ORM\Entity
 * @ORM\Table(name="cart")
 */
class CartProducts
{
    use IdTrait;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected int $quantity;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime")
     */
    protected DateTime $created;

    /**
     * @var Product
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id",referencedColumnName="id")
     */
    protected Product $product;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */
    protected User $user;

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     */
    public function setCreated(DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}