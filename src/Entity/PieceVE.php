<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PieceVERepository")
 */
class PieceVE
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
    private $marque;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $modele;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $version_logiciel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MaterielVE", inversedBy="fk_pieceVE")
     * @ORM\JoinColumn(nullable=false)
     */
    private $materielVE;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(?string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getVersionLogiciel(): ?string
    {
        return $this->version_logiciel;
    }

    public function setVersionLogiciel(?string $version_logiciel): self
    {
        $this->version_logiciel = $version_logiciel;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function __toString()
    {
        $format = "%s,%s,%s,%s";
        return sprintf($format,
            $this->marque,
            $this->modele,
            $this->version_logiciel,
            $this->type
        );
    }
}
