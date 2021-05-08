<?php

namespace App\Entity;

use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TagRepository::class)
 */
class Tag
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomTag;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionTag;

    /**
     * @ORM\ManyToMany(targetEntity=Article::class, mappedBy="idTag")
     */
    private $idTag;

    public function __construct()
    {
        $this->idTag = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTag(): ?string
    {
        return $this->nomTag;
    }

    public function setNomTag(string $nomTag): self
    {
        $this->nomTag = $nomTag;

        return $this;
    }

    public function getDescriptionTag(): ?string
    {
        return $this->descriptionTag;
    }

    public function setDescriptionTag(string $descriptionTag): self
    {
        $this->descriptionTag = $descriptionTag;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getIdTag(): Collection
    {
        return $this->idTag;
    }

    public function addIdTag(Article $idTag): self
    {
        if (!$this->idTag->contains($idTag)) {
            $this->idTag[] = $idTag;
            $idTag->addIdTag($this);
        }

        return $this;
    }

    public function removeIdTag(Article $idTag): self
    {
        if ($this->idTag->removeElement($idTag)) {
            $idTag->removeIdTag($this);
        }

        return $this;
    }
    
    public function __toString()
    {
        return $this->nomTag;
    }
}
