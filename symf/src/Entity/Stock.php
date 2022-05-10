<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity(repositoryClass="App\Repository\StockRepository")
 */
class Stock
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpro;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float",  nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;




    /**
     * @ORM\ManyToOne(targetEntity="CategorieStock", inversedBy="stocks")
     * @ORM\JoinColumn(name="idcat", referencedColumnName="idcat")
     */
    private $category;



    /**
     * @ORM\Column(type="string", length=500,nullable=true)
     */
    private $image;


    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;


    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }




    /**
     * @return int
     */
    public function getIdpro(): int
    {
        return $this->idpro;
    }

    /**
     * @param int $idpro
     */
    public function setIdpro(int $idpro): void
    {
        $this->idpro = $idpro;
    }

    /**
     * @return string
     */
    public function getNom()
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
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }

    /**
     * @return string
     */
    public function getDescription()
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
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    //UPLOAD IMAGE
    //GeT PUBLIC FOLDER

    //UPLOAD IMAGE
    //GeT PUBLIC FOLDER
    public function getPublicFolder() {

        return __DIR__.'/../../public/uploads/stock_image';

    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param UploadedFile
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }


    //te5o image w tzidha fi dossier produit_image
    public function upload()
    {
        if(null === $this->getFile()) {
            return;
        }

        $this->getFile()->move(
            $this->getPublicFolder(),//destinataire
            $this->getFile()->getClientOriginalName()//esem fichier (image)
        );

        $this->image = $this->getFile()->getClientOriginalName();//

        $this->file = null; // liberation memoire
    }


}
