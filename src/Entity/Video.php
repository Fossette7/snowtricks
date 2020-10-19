<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VideoRepository::class)
 */
class Video
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $videoName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idTrick;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Trick", inversedBy="video")
     */

    private $trick;

    public function getId()
    {
        return $this->id;
    }

    public function getVideoName()
    {
        return $this->videoName;
    }

    public function setVideoName($videoName)
    {
        $this->videoName = $videoName;

        return $this;
    }

    public function getIdTrick()
    {
        return $this->idTrick;
    }

    public function setIdTrick(?int $idTrick)
    {
        $this->idTrick = $idTrick;

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
