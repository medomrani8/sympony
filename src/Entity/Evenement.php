<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 * @UniqueEntity("nom")

 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEven", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideven;

    /**
     * @Assert\NotBlank(message=" champ doit etre non vide")
     * @Assert\Length(
     *      min = 3,
     *      minMessage=" Entrer un Nom au mini de 3 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

   /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEven", type="date", nullable=false)
     */
    private $dateeven;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @return int
     */
    public function getIdeven(): ?int
    {
        return $this->ideven;
    }

    /**
     * @param int $ideven
     */
    public function setIdeven(int $ideven): void
    {
        $this->ideven = $ideven;
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

    /**
     * @return \DateTime
     */
    public function getDateeven(): ?\DateTime
    {
        return $this->dateeven;
    }

    /**
     * @param \DateTime $dateeven
     */
    public function setDateeven(\DateTime $dateeven): void
    {
        $this->dateeven = $dateeven;
    }

    /**
     * @return int
     */
    public function getPrix(): ?int
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix(int $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getRecompense(): ?int
    {
        return $this->recompense;
    }

    /**
     * @param int $recompense
     */
    public function setRecompense(int $recompense): void
    {
        $this->recompense = $recompense;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="recompense", type="integer", nullable=false)
     */
    private $recompense;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;


    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto( $photo)
    {
        $this->photo = $photo;

        return $this;
    }



}
