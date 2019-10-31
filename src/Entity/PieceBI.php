<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PieceBIRepository")
 */
class PieceBI
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
    private $code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $designation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prixU_HT;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MaterielBI", inversedBy="fk_pieceBI")
     * @ORM\JoinColumn(nullable=false)
     */
    private $materielBI;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getPrixUHT(): ?int
    {
        return $this->prixU_HT;
    }

    public function setPrixUHT(?int $prixU_HT): self
    {
        $this->prixU_HT = $prixU_HT;

        return $this;
    }

    public function getMaterielBI(): ?MaterielBI
    {
        return $this->materielBI;
    }

    public function setMaterielBI(?MaterielBI $materielBI): self
    {
        $this->materielBI = $materielBI;

        return $this;
    }

    public function __toString()
    {
        $format = "%s,%s,%s,%s";
        return sprintf($format,
            $this->id,
            $this->code,
            $this->designation,
            $this->prixU_HT
        );
    }
}
