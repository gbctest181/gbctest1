<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MaterielVERepository")
 */
class MaterielVE
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emplacement;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resultat_test;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PieceVE", mappedBy="materielVE")
     */
    private $fk_pieceVE;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Alimentation", mappedBy="materielVE")
     */
    private $fk_alimentation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Intervention", inversedBy="fk_materielVE")
     * @ORM\JoinColumn(nullable=false)
     */
    private $intervention;

    public function __construct()
    {
        $this->fk_pieceVE = new ArrayCollection();
        $this->fk_alimentation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(?string $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
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

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getResultatTest(): ?string
    {
        return $this->resultat_test;
    }

    public function setResultatTest(?string $resultat_test): self
    {
        $this->resultat_test = $resultat_test;

        return $this;
    }

    /**
     * @return Collection|PieceVE[]
     */
    public function getFkPieceVE(): Collection
    {
        return $this->fk_pieceVE;
    }

    public function addFkPieceVE(PieceVE $fkPieceVE): self
    {
        if (!$this->fk_pieceVE->contains($fkPieceVE)) {
            $this->fk_pieceVE[] = $fkPieceVE;
            $fkPieceVE->setMaterielVE($this);
        }

        return $this;
    }

    public function removeFkPieceVE(PieceVE $fkPieceVE): self
    {
        if ($this->fk_pieceVE->contains($fkPieceVE)) {
            $this->fk_pieceVE->removeElement($fkPieceVE);
            // set the owning side to null (unless already changed)
            if ($fkPieceVE->getMaterielVE() === $this) {
                $fkPieceVE->setMaterielVE(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Alimentation[]
     */
    public function getFkAlimentation(): Collection
    {
        return $this->fk_alimentation;
    }

    public function addFkAlimentation(Alimentation $fkAlimentation): self
    {
        if (!$this->fk_alimentation->contains($fkAlimentation)) {
            $this->fk_alimentation[] = $fkAlimentation;
            $fkAlimentation->setMaterielVE($this);
        }

        return $this;
    }

    public function removeFkAlimentation(Alimentation $fkAlimentation): self
    {
        if ($this->fk_alimentation->contains($fkAlimentation)) {
            $this->fk_alimentation->removeElement($fkAlimentation);
            // set the owning side to null (unless already changed)
            if ($fkAlimentation->getMaterielVE() === $this) {
                $fkAlimentation->setMaterielVE(null);
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
        $format = "%s,%s,%s,%s,%s,%s";
        return sprintf($format,
            $this->emplacement,
            $this->quantite,
            $this->observation,
            $this->resultat_test,
            $this->fk_pieceVE,
            $this->fk_alimentation
        );
    }
}
