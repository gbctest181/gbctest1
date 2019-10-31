<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlimentationRepository")
 */
class Alimentation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tension_chargeur;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tension_batterie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $conso_service;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $capacite_batterie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MaterielVE", inversedBy="fk_alimentation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $materielVE;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTensionChargeur(): ?int
    {
        return $this->tension_chargeur;
    }

    public function setTensionChargeur(?int $tension_chargeur): self
    {
        $this->tension_chargeur = $tension_chargeur;

        return $this;
    }

    public function getTensionBatterie(): ?int
    {
        return $this->tension_batterie;
    }

    public function setTensionBatterie(?int $tension_batterie): self
    {
        $this->tension_batterie = $tension_batterie;

        return $this;
    }

    public function getConsoService(): ?int
    {
        return $this->conso_service;
    }

    public function setConsoService(?int $conso_service): self
    {
        $this->conso_service = $conso_service;

        return $this;
    }

    public function getCapaciteBatterie(): ?int
    {
        return $this->capacite_batterie;
    }

    public function setCapaciteBatterie(?int $capacite_batterie): self
    {
        $this->capacite_batterie = $capacite_batterie;

        return $this;
    }

    public function getMaterielVE(): ?MaterielVE
    {
        return $this->materielVE;
    }

    public function setMaterielVE(?MaterielVE $materielVE): self
    {
        $this->materielVE = $materielVE;

        return $this;
    }
}
