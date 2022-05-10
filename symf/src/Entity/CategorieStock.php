<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieStock
 *
 * @ORM\Table(name="categorie_stock")
 * @ORM\Entity
 */
class CategorieStock
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcat;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @return int
     */
    public function getIdcat(): int
    {
        return $this->idcat;
    }

    /**
     * @param int $idcat
     */
    public function setIdcat(int $idcat): void
    {
        $this->idcat = $idcat;
    }

    /**
     * @return string
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    //JOINTURE
    /**
     * @ORM\OneToMany(targetEntity="Stock", mappedBy="category")
     */
    private $stocks;


    public function getProducts(): Collection
    {
        return  $this->stocks;
    }

    public function addProducts(Stock $product): self
    {

        if (!$this->stocks->contains($product)) {
            $this->stocks[] = $product;
            $product->setCategory($this);
        }
        return $this;
    }

    public function removeProducts(Stock $product): self
    {
        if ($this->stocks->removeElement($product)) {
            if ($this->stocks->getCatgory() == $this) {
                $product->setCategory(null);
            }
        }
        return $this;
    }
}
