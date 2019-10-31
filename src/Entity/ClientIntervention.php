<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientInterventionRepository")
 */
class ClientIntervention
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $representant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fonction;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProcesVerbal", mappedBy="procesVerbal")
     */
    private $fk_procesVerbal;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Formation", mappedBy="formation")
     */
    private $fk_formation;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Intervention", mappedBy="fk_clientIntervention")
     */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ClientFinal", mappedBy="clientIntervention")
     */
    private $fk_clientFinal;

    public function __construct()
    {
        $this->fk_procesVerbal = new ArrayCollection();
        $this->fk_formation = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->fk_clientFinal = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(?int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getRepresentant(): ?string
    {
        return $this->representant;
    }

    public function setRepresentant(?string $representant): self
    {
        $this->representant = $representant;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    

    /**
     * @return Collection|ProcesVerbal[]
     */
    public function getFkProcesVerbal(): Collection
    {
        return $this->fk_procesVerbal;
    }

    public function addFkProcesVerbal(ProcesVerbal $fkProcesVerbal): self
    {
        if (!$this->fk_procesVerbal->contains($fkProcesVerbal)) {
            $this->fk_procesVerbal[] = $fkProcesVerbal;
            $fkProcesVerbal->setProcesVerbal($this);
        }

        return $this;
    }

    public function removeFkProcesVerbal(ProcesVerbal $fkProcesVerbal): self
    {
        if ($this->fk_procesVerbal->contains($fkProcesVerbal)) {
            $this->fk_procesVerbal->removeElement($fkProcesVerbal);
            // set the owning side to null (unless already changed)
            if ($fkProcesVerbal->getProcesVerbal() === $this) {
                $fkProcesVerbal->setProcesVerbal(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Formation[]
     */
    public function getFkFormation(): Collection
    {
        return $this->fk_formation;
    }

    public function addFkFormation(Formation $fkFormation): self
    {
        if (!$this->fk_formation->contains($fkFormation)) {
            $this->fk_formation[] = $fkFormation;
            $fkFormation->setFormation($this);
        }

        return $this;
    }

    public function removeFkFormation(Formation $fkFormation): self
    {
        if ($this->fk_formation->contains($fkFormation)) {
            $this->fk_formation->removeElement($fkFormation);
            // set the owning side to null (unless already changed)
            if ($fkFormation->getFormation() === $this) {
                $fkFormation->setFormation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Intervention[]
     */
    public function getInterventions(): Collection
    {
        return $this->interventions;
    }

    public function addIntervention(Intervention $intervention): self
    {
        if (!$this->interventions->contains($intervention)) {
            $this->interventions[] = $intervention;
            $intervention->setFkClientIntervention($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getFkClientIntervention() === $this) {
                $intervention->setFkClientIntervention(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ClientFinal[]
     */
    public function getFkClientFinal(): Collection
    {
        return $this->fk_clientFinal;
    }

    public function addFkClientFinal(ClientFinal $fkClientFinal): self
    {
        if (!$this->fk_clientFinal->contains($fkClientFinal)) {
            $this->fk_clientFinal[] = $fkClientFinal;
            $fkClientFinal->setClientIntervention($this);
        }

        return $this;
    }

    public function removeFkClientFinal(ClientFinal $fkClientFinal): self
    {
        if ($this->fk_clientFinal->contains($fkClientFinal)) {
            $this->fk_clientFinal->removeElement($fkClientFinal);
            // set the owning side to null (unless already changed)
            if ($fkClientFinal->getClientIntervention() === $this) {
                $fkClientFinal->setClientIntervention(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        $format = "%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s";
        return sprintf($format,
            $this->nom,
            $this->representant,
            $this->fonction,
            $this->adresse,
            $this->code_postal,
            $this->ville,
            $this->telephone,
            $this->fax,
            $this->mobile,
            $this->mail,
            $this->fk_clientFinal,
            $this->fk_formation,
            $this->fk_procesVerbal
        );
    }
}
