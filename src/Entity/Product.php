<?php


namespace BlackScorp\ORM\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 * @package BlackScorp\ORM\Entity
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{
    use IdTrait;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=false)
     */
    protected string $description;
    /**
     * @var string
     * @ORM\Column(type="integer", nullable=false)
     */
    protected int $price;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=false)
     */
    protected string $title;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('DRAFT', 'LIVE')", options={"default":"DRAFT"})
     */
    protected string $status;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=false)
     */
    protected string $slug;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

}