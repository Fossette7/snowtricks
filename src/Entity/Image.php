<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idTrickName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Trick", inversedBy="photo")
     */

    private $trick;

    public function getId()
    {
        return $this->id;
    }

    public function getIdTrickName()
    {
        return $this->idTrickName;
    }

    public function setIdTrickName($idTrickName)
    {
        $this->idTrickName = $idTrickName;

        return $this;
    }

    public function getImageName()
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getTrick()
    {
        return $this->trick;
    }

    public function setTrick(?Trick $trick)
    {
        $this->trick = $trick;

        return $this;
    }
}
