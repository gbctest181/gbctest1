<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProcesVerbalRepository")
 */
class ProcesVerbal
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
    private $devis;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_devis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commande_client;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_commande;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cctp;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_cctp;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $siganture_client;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $signature_gbc;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ClientIntervention", inversedBy="fk_procesVerbal")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clientIntervention;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDevis(): ?string
    {
        return $this->devis;
    }

    public function setDevis(?string $devis): self
    {
        $this->devis = $devis;

        return $this;
    }

    public function getDateDevis(): ?\DateTimeInterface
    {
        return $this->date_devis;
    }

    public function setDateDevis(?\DateTimeInterface $date_devis): self
    {
        $this->date_devis = $date_devis;

        return $this;
    }

    public function getCommandeClient(): ?string
    {
        return $this->commande_client;
    }

    public function setCommandeClient(?string $commande_client): self
    {
        $this->commande_client = $commande_client;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->date_commande;
    }

    public function setDateCommande(?\DateTimeInterface $date_commande): self
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getCctp(): ?string
    {
        return $this->cctp;
    }

    public function setCctp(?string $cctp): self
    {
        $this->cctp = $cctp;

        return $this;
    }

    public function getDateCctp(): ?\DateTimeInterface
    {
        return $this->date_cctp;
    }

    public function setDateCctp(?\DateTimeInterface $date_cctp): self
    {
        $this->date_cctp = $date_cctp;

        return $this;
    }

    public function getSigantureClient()
    {
        return $this->siganture_client;
    }

    public function setSigantureClient($siganture_client): self
    {
        $this->siganture_client = $siganture_client;

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

    public function getclientIntervention(): ?ClientIntervention
    {
        return $this->clientIntervention;
    }

    public function setclientIntervention(?ClientIntervention $clientIntervention): self
    {
        $this->clientIntervention = $clientIntervention;

        return $this;
    }

    public function __toString()
    {
        $format = "%s,%s,%s,%s,%s,%s,%s,%s";
        return sprintf($format,
            $this->devis,
            $this->date_devis,
            $this->commande_client,
            $this->date_commande,
            $this->cctp,
            $this->date_cctp,
            $this->signature_gbc,
            $this->siganture_client
        );
    }
}
