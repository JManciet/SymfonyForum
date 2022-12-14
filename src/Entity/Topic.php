<?php

namespace App\Entity;

use App\Repository\TopicRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TopicRepository::class)
 */
class Topic
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $resolu;

    /**
     * @ORM\Column(type="boolean")
     */
    private $verrouiller;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isResolu(): ?bool
    {
        return $this->resolu;
    }

    public function setResolu(bool $resolu): self
    {
        $this->resolu = $resolu;

        return $this;
    }

    public function isVerrouiller(): ?bool
    {
        return $this->verrouiller;
    }

    public function setVerrouiller(bool $verrouiller): self
    {
        $this->verrouiller = $verrouiller;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }
}
