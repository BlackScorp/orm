<?php


namespace BlackScorp\ORM\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package BlackScorp\ORM\Entity
 * @ORM\Entity
 */
class User
{
    use IdTrait;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=false)
     */
    protected string $username;
    /**
     * @var string
     * @ORM\Column(type="string",nullable=false)
     */
    protected string $password;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=false,unique=true)
     */
    protected string $email;
    /**
     * @var string|null
     * @ORM\Column(type="string", nullable=true)
     */
    protected ?string $activationKey = null;

    /**
     * @var string
     * @ORM\Column(type="string",columnDefinition="ENUM('USER','ADMIN')", options={"default":"USER"})
     */
    protected string $userRights;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="CartProducts", mappedBy="user")
     * @ORM\JoinTable(name="cart",
     *  joinColumns={@ORM\JoinColumn(name="user_id",referencedColumnName="id")}
     * )
     */
    protected Collection $cartProducts;

    /**
     * @return Collection
     */
    public function getCartProducts(): Collection
    {
        return $this->cartProducts;
    }

    /**
     * @param Collection $cartProducts
     */
    public function setCartProducts(Collection $cartProducts): void
    {
        $this->cartProducts = $cartProducts;
    }


    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getActivationKey(): ?string
    {
        return $this->activationKey;
    }

    /**
     * @param string|null $activationKey
     */
    public function setActivationKey(?string $activationKey): void
    {
        $this->activationKey = $activationKey;
    }

    /**
     * @return string
     */
    public function getUserRights(): string
    {
        return $this->userRights;
    }

    /**
     * @param string $userRights
     */
    public function setUserRights(string $userRights): void
    {
        $this->userRights = $userRights;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


}