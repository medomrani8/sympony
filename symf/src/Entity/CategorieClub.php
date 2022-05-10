<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieClub
 *
 * @ORM\Table(name="categorie_club", indexes={@ORM\Index(name="idClub", columns={"idClub"})})
 * @ORM\Entity
 */
class CategorieClub
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEntreneur", type="string", length=255, nullable=false)
     */
    private $nomentreneur;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=false)
     */
    private $activite;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClub", referencedColumnName="idClub")
     * })
     */
    private $idclub;

    /**
     * @return int
     */
    public function getIdcategorie(): int
    {
        return $this->idcategorie;
    }

    /**
     * @param int $idcategorie
     */
    public function setIdcategorie(int $idcategorie): void
    {
        $this->idcategorie = $idcategorie;
    }

    /**
     * @return string
     */
    public function getNomentreneur(): ?string
    {
        return $this->nomentreneur;
    }

    /**
     * @param string $nomentreneur
     */
    public function setNomentreneur(string $nomentreneur): void
    {
        $this->nomentreneur = $nomentreneur;
    }

    /**
     * @return string
     */
    public function getActivite(): ?string
    {
        return $this->activite;
    }

    /**
     * @param string $activite
     */
    public function setActivite(string $activite): void
    {
        $this->activite = $activite;
    }


    public function getIdclub(): ?Club
    {
        return $this->idclub;
    }


    public function setIdclub(?Club $idclub): void
    {
        $this->idclub = $idclub;
    }


}
