<?php

namespace App\Entity\Berrygames;

use App\Entity\Transcoder;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Players
 *
 * @ORM\Table(name="players")
 * @ORM\Entity
 * @UniqueEntity("uuid")
 */
class Players
{

    /**
     * @ORM\Id
     * @ORM\Column(name="uuid", type="text", nullable=false)
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="identity", type="text", length=4294967295, nullable=true)
     */
    private $identity;

    /**
     * @var string
     *
     * @ORM\Column(name="ranks", type="text", length=4294967295, nullable=true)
     */
    private $ranks;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="text", length=4294967295, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="progression", type="string", length=255, nullable=true)
     */
    private $progression;

    /**
     * @var string
     *
     * @ORM\Column(name="2af", type="text", length=4294967295, nullable=true)
     */
    private $taf;

    /**
     * @var string
     *
     * @ORM\Column(name="sanctions", type="text", length=4294967295, nullable=true)
     */
    private $sanctions;

    /**
     * @var string
     *
     * @ORM\Column(name="relations", type="text", length=4294967295, nullable=true)
     */
    private $relations;

    public function getUuid(): ?string
    {
        $transcoder = new Transcoder();
        return $transcoder->decode($this->uuid);
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(string $identity): self
    {
        $this->identity = $identity;

        return $this;
    }

    public function getRanks(): ?string
    {
        return $this->ranks;
    }

    public function setRanks(string $ranks): self
    {
        $this->ranks = $ranks;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getProgression(): ?string
    {
        return $this->progression;
    }

    public function setProgression(string $progression): self
    {
        $this->progression = $progression;

        return $this;
    }

    public function getTaf(): ?string
    {
        return $this->taf;
    }

    public function setTaf(string $taf): self
    {
        $this->taf = $taf;

        return $this;
    }

    public function getSanctions(): ?string
    {
        return $this->sanctions;
    }

    public function setSanctions(string $sanctions): self
    {
        $this->sanctions = $sanctions;

        return $this;
    }

    public function getRelations(): ?string
    {
        return $this->relations;
    }

    public function setRelations(string $relations): self
    {
        $this->relations = $relations;

        return $this;
    }

}
