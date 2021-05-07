<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $titreArticle;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $statutArticle;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreationArticle;

    /**
     * @ORM\Column(type="date")
     */
    private $datePublicationArticle;

    /**
     * @ORM\Column(type="text")
     */
    private $contenuArticle;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="idCategorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCategorie;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="idTag")
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

    public function getTitreArticle(): ?string
    {
        return $this->titreArticle;
    }

    public function setTitreArticle(string $titreArticle): self
    {
        $this->titreArticle = $titreArticle;

        return $this;
    }

    public function getStatutArticle(): ?string
    {
        return $this->statutArticle;
    }

    public function setStatutArticle(string $statutArticle): self
    {
        $this->statutArticle = $statutArticle;

        return $this;
    }

    public function getDateCreationArticle(): ?\DateTimeInterface
    {
        return $this->dateCreationArticle;
    }

    public function setDateCreationArticle(\DateTimeInterface $dateCreationArticle): self
    {
        $this->dateCreationArticle = $dateCreationArticle;

        return $this;
    }

    public function getDatePublicationArticle(): ?\DateTimeInterface
    {
        return $this->datePublicationArticle;
    }

    public function setDatePublicationArticle(\DateTimeInterface $datePublicationArticle): self
    {
        $this->datePublicationArticle = $datePublicationArticle;

        return $this;
    }

    public function getContenuArticle(): ?string
    {
        return $this->contenuArticle;
    }

    public function setContenuArticle(string $contenuArticle): self
    {
        $this->contenuArticle = $contenuArticle;

        return $this;
    }

    public function getIdCategorie(): ?Categorie
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(?Categorie $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getIdTag(): Collection
    {
        return $this->idTag;
    }

    public function addIdTag(Tag $idTag): self
    {
        if (!$this->idTag->contains($idTag)) {
            $this->idTag[] = $idTag;
        }

        return $this;
    }

    public function removeIdTag(Tag $idTag): self
    {
        $this->idTag->removeElement($idTag);

        return $this;
    }
}
