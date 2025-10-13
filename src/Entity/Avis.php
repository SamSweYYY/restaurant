<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $notes = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    /**
     * @var Collection<int, Client>
     */
    #[ORM\OneToMany(targetEntity: Client::class, mappedBy: 'avis')]
    private Collection $avis_client;

    /**
     * @var Collection<int, Plat>
     */
    #[ORM\OneToMany(targetEntity: Plat::class, mappedBy: 'avis')]
    private Collection $plat;

    public function __construct()
    {
        $this->avis_client = new ArrayCollection();
        $this->plat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isNotes(): ?bool
    {
        return $this->notes;
    }

    public function setNotes(bool $notes): static
    {
        $this->notes = $notes;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Client>
     */
    public function getAvisClient(): Collection
    {
        return $this->avis_client;
    }

    public function addAvisClient(Client $avisClient): static
    {
        if (!$this->avis_client->contains($avisClient)) {
            $this->avis_client->add($avisClient);
            $avisClient->setAvis($this);
        }

        return $this;
    }

    public function removeAvisClient(Client $avisClient): static
    {
        if ($this->avis_client->removeElement($avisClient)) {
            // set the owning side to null (unless already changed)
            if ($avisClient->getAvis() === $this) {
                $avisClient->setAvis(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Plat>
     */
    public function getPlat(): Collection
    {
        return $this->plat;
    }

    public function addPlat(Plat $plat): static
    {
        if (!$this->plat->contains($plat)) {
            $this->plat->add($plat);
            $plat->setAvis($this);
        }

        return $this;
    }

    public function removePlat(Plat $plat): static
    {
        if ($this->plat->removeElement($plat)) {
            // set the owning side to null (unless already changed)
            if ($plat->getAvis() === $this) {
                $plat->setAvis(null);
            }
        }

        return $this;
    }
}
