<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
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
    private $nomCategorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionCategorie;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="idCategorie", orphanRemoval=true)
     */
    private $idCategorie;

    public function __construct()
    {
        $this->idCategorie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nomCategorie;
    }

    public function setNomCategorie(string $nomCategorie): self
    {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }

    public function getDescriptionCategorie(): ?string
    {
        return $this->descriptionCategorie;
    }

    public function setDescriptionCategorie(string $descriptionCategorie): self
    {
        $this->descriptionCategorie = $descriptionCategorie;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getIdCategorie(): Collection
    {
        return $this->idCategorie;
    }

    public function addIdCategorie(Article $idCategorie): self
    {
        if (!$this->idCategorie->contains($idCategorie)) {
            $this->idCategorie[] = $idCategorie;
            $idCategorie->setIdCategorie($this);
        }

        return $this;
    }

    public function removeIdCategorie(Article $idCategorie): self
    {
        if ($this->idCategorie->removeElement($idCategorie)) {
            // set the owning side to null (unless already changed)
            if ($idCategorie->getIdCategorie() === $this) {
                $idCategorie->setIdCategorie(null);
            }
        }

        return $this;
    }
    
    public function __toString()
    {
        return $this->nomCategorie;
    }
}
