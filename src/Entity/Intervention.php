<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InterventionRepository")
 */
class Intervention
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $rapport_technicien;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observation_client;

    /**
     * @ORM\Column(type="blob")
     */
    private $signature_client;

    /**
     * @ORM\Column(type="blob")
     */
    private $signature_gbc;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Technicien", mappedBy="intervention")
     */
    private $fk_technicien;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MaterielVE", mappedBy="intervention")
     */
    private $fk_materielVE;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MaterielBI", mappedBy="intervention")
     */
    private $fk_materielBI;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ClientIntervention", inversedBy="interventions")
     */
    private $fk_clientIntervention;

    public function __construct()
    {
        $this->fk_technicien = new ArrayCollection();
        $this->fk_materielVE = new ArrayCollection();
        $this->fk_materielBI = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getRapportTechnicien(): ?string
    {
        return $this->rapport_technicien;
    }

    public function setRapportTechnicien(?string $rapport_technicien): self
    {
        $this->rapport_technicien = $rapport_technicien;

        return $this;
    }

    public function getObservationClient(): ?string
    {
        return $this->observation_client;
    }

    public function setObservationClient(?string $observation_client): self
    {
        $this->observation_client = $observation_client;

        return $this;
    }

    public function getSignatureClient()
    {
        return $this->signature_client;
    }

    public function setSignatureClient($signature_client): self
    {
        $this->signature_client = $signature_client;

        return $this;
    }

    public function getSignatureGbc()
    {
        return $this->signature_gbc;
    }

    public function setSignatureGbc($signature_gbc): self
    {
        $this->signature_gbc = $signature_gbc;

        return $this;
    }

    /**
     * @return Collection|Technicien[]
     */
    public function getFkTechnicien(): Collection
    {
        return $this->fk_technicien;
    }

    public function addFkTechnicien(Technicien $fkTechnicien): self
    {
        if (!$this->fk_technicien->contains($fkTechnicien)) {
            $this->fk_technicien[] = $fkTechnicien;
            $fkTechnicien->setIntervention($this);
        }

        return $this;
    }

    public function removeFkTechnicien(Technicien $fkTechnicien): self
    {
        if ($this->fk_technicien->contains($fkTechnicien)) {
            $this->fk_technicien->removeElement($fkTechnicien);
            // set the owning side to null (unless already changed)
            if ($fkTechnicien->getIntervention() === $this) {
                $fkTechnicien->setIntervention(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MaterielVE[]
     */
    public function getFkMaterielVE(): Collection
    {
        return $this->fk_materielVE;
    }

    public function addFkMaterielVE(MaterielVE $fkMaterielVE): self
    {
        if (!$this->fk_materielVE->contains($fkMaterielVE)) {
            $this->fk_materielVE[] = $fkMaterielVE;
            $fkMaterielVE->setIntervention($this);
        }

        return $this;
    }

    public function removeFkMaterielVE(MaterielVE $fkMaterielVE): self
    {
        if ($this->fk_materielVE->contains($fkMaterielVE)) {
            $this->fk_materielVE->removeElement($fkMaterielVE);
            // set the owning side to null (unless already changed)
            if ($fkMaterielVE->getIntervention() === $this) {
                $fkMaterielVE->setIntervention(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MaterielBI[]
     */
    public function getFkMaterielBI(): Collection
    {
        return $this->fk_materielBI;
    }

    public function addFkMaterielBI(MaterielBI $fkMaterielBI): self
    {
        if (!$this->fk_materielBI->contains($fkMaterielBI)) {
            $this->fk_materielBI[] = $fkMaterielBI;
            $fkMaterielBI->setIntervention($this);
        }

        return $this;
    }

    public function removeFkMaterielBI(MaterielBI $fkMaterielBI): self
    {
        if ($this->fk_materielBI->contains($fkMaterielBI)) {
            $this->fk_materielBI->removeElement($fkMaterielBI);
            // set the owning side to null (unless already changed)
            if ($fkMaterielBI->getIntervention() === $this) {
                $fkMaterielBI->setIntervention(null);
            }
        }

        return $this;
    }

    public function getFkClientIntervention(): ?ClientIntervention
    {
        return $this->fk_clientIntervention;
    }

    public function setFkClientIntervention(?ClientIntervention $fk_clientIntervention): self
    {
        $this->fk_clientIntervention = $fk_clientIntervention;

        return $this;
    }
}
