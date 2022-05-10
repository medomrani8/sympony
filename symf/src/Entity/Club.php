<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="App\Repository\ClubRepository")
 */
class Club
{
    /**
     * @var int
     *
     * @ORM\Column(name="idClub", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclub;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="validite", type="string", length=255, nullable=false)
     */
    private $validite;

    /**
     * @var int
     *
     * @ORM\Column(name="numTel", type="integer", nullable=false)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

//    protected $captchaCode;

    /**
     * @return int
     */
    public function getIdclub(): int
    {
        return $this->idclub;
    }

    /**
     * @param int $idclub
     */
    public function setIdclub(int $idclub): void
    {
        $this->idclub = $idclub;
    }

    /**
     * @return string
     */
    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getValidite(): ?string
    {
        return $this->validite;
    }

    /**
     * @param string $validite
     */
    public function setValidite(string $validite): void
    {
        $this->validite = $validite;
    }

    /**
     * @return int
     */
    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    /**
     * @param int $numtel
     */
    public function setNumtel(int $numtel): void
    {
        $this->numtel = $numtel;
    }

    /**
     * @return string
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }
    public function __toString(): string
    {
        return $this->categorie;
    }

//
//    public function getCaptchaCode()
//    {
//        return $this->captchaCode;
//    }
//
//
//    public function setCaptchaCode($captchaCode)
//    {
//        $this->captchaCode = $captchaCode;
//    }

}
