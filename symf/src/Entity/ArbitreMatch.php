<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ArbitreMatch
 *
 * @ORM\Table(name="arbitre_match")
 * @ORM\Entity
 */
class ArbitreMatch
{
    /**
     * @var int
     *
     * @ORM\Column(name="idArb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarb;

    /**
     *@Assert\NotBlank(message="nom d'arbitre doit etre non vide")
     *@Assert\Length(
     * min = 5,
     * minMessage="Entrer un nom ou minimum de 5 caracteres"
     *
     *   )
     * @var string
     * @ORM\Column(name="nomArb", type="string", length=30, nullable=false)
     */
    private $nomarb;

    /**
     *@Assert\NotBlank(message="Specialité doit etre non vide")
     *@Assert\Length(
     * min = 3,
     * minMessage="Entrer une specialité ou minimum de 3 caracteres"
     *
     *   )
     * @var string
     * @ORM\Column(name="specialite", type="string", length=255, nullable=false)
     */
    private $specialite;

    /**
     *@Assert\NotBlank(message="L'email doit etre non vide")
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * @var string
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;



    public function getIdarb(): ?int
    {
        return $this->idarb;
    }

    public function setIdarb(string $idarb): self
    {
        $this->idmatchh = $idarb;

        return $this;
    }


    public function getNomarb(): ?string
    {
        return $this->nomarb;
    }

    public function setNomarb(string $nomarb): self
    {
        $this->nomarb = $nomarb;

        return $this;
    }


    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }



    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setemail(string $email): self
    {
        $this->email = $email;

        return $this;
    }





}
