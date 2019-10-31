<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MaterielBIRepository")
 */
class MaterielBI
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_totalHT;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PieceBI", mappedBy="materielBI")
     */
    private $fk_pieceBI;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Intervention", inversedBy="fk_materielBI")
     * @ORM\JoinColumn(nullable=false)
     */
    private $intervention;

    public function __construct()
    {
        $this->fk_pieceBI = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixTotalHT(): ?int
    {
        return $this->prix_totalHT;
    }

    public function setPrixTotalHT(int $prix_totalHT): self
    {
        $this->prix_totalHT = $prix_totalHT;

        return $this;
    }

    /**
     * @return Collection|PieceBI[]
     */
    public function getFkPieceBI(): Collection
    {
        return $this->fk_pieceBI;
    }

    public function addFkPieceBI(PieceBI $fkPieceBI): self
    {
        if (!$this->fk_pieceBI->contains($fkPieceBI)) {
            $this->fk_pieceBI[] = $fkPieceBI;
            $fkPieceBI->setMaterielBI($this);
        }

        return $this;
    }

    public function removeFkPieceBI(PieceBI $fkPieceBI): self
    {
        if ($this->fk_pieceBI->contains($fkPieceBI)) {
            $this->fk_pieceBI->removeElement($fkPieceBI);
            // set the owning side to null (unless already changed)
            if ($fkPieceBI->getMaterielBI() === $this) {
                $fkPieceBI->setMaterielBI(null);
            }
        }

        return $this;
    }

    public function getIntervention(): ?Intervention
    {
        return $this->intervention;
    }

    public function setIntervention(?Intervention $intervention): self
    {
        $this->intervention = $intervention;

        return $this;
    }

    public function __toString()
    {
        $format = "%s,%s,%s,%s";
        return sprintf($format,
            $this->id,
            $this->quantite,
            $this->prix_totalHT,
            $this->fk_pieceBI
        );
    }
}
