<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_guest", type="integer", nullable=false)
     */
    private $idGuest;

    /**
     * @var int
     *
     * @ORM\Column(name="id_even", type="integer", nullable=false)
     */
    private $idEven;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_com", type="datetime", nullable=true)
     */
    private $dateCom;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdGuest(): ?int
    {
        return $this->idGuest;
    }

    /**
     * @param int $idGuest
     */
    public function setIdGuest(int $idGuest): void
    {
        $this->idGuest = $idGuest;
    }

    /**
     * @return int
     */
    public function getIdEven(): ?int
    {
        return $this->idEven;
    }

    /**
     * @param int $idEven
     */
    public function setIdEven(int $idEven): void
    {
        $this->idEven = $idEven;
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
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @return \DateTime
     */
    public function getDateCom(): \DateTime
    {
        return $this->dateCom;
    }

    /**
     * @param \DateTime $dateCom
     */
    public function setDateCom(\DateTime $dateCom): void
    {
        $this->dateCom = $dateCom;
    }

    /**
     * @return int
     */
    public function getNote(): ?int
    {
        return $this->note;
    }

    /**
     * @param int $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }




}
