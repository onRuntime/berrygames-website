<?php

namespace App\Entity\Berrygames;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Games
 *
 * @ORM\Table(name="games")
 * @ORM\Entity
 * @UniqueEntity("codename")
 */
class Games
{
    const STATE = [
        'RELEASE' => 'RELEASE',
        'BETA' => 'BETA'
    ];

    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="codename", type="string", length=255, nullable=false)
     */
    private $codename;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255, nullable=false)
     */
    private $tag;

    /**
     * @var bool
     *
     * @ORM\Column(name="arcade", type="boolean", nullable=false)
     */
    private $arcade;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="texture", type="string", length=255, nullable=false)
     */
    private $texture;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=false)
     */
    private $state;

    public function getCodename(): ?string
    {
        return $this->codename;
    }

    public function setCodename(string $codename): self
    {
        $this->codename = $codename;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getArcade(): ?bool
    {
        return $this->arcade;
    }

    public function setArcade(bool $arcade): self
    {
        $this->arcade = $arcade;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTexture(): ?string
    {
        return $this->texture;
    }

    public function setTexture(string $texture): self
    {
        $this->texture = $texture;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }


}
