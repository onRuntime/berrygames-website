<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAdvertisingPosition
 *
 * @ORM\Table(name="xf_advertising_position")
 * @ORM\Entity
 */
class XfAdvertisingPosition
{
    /**
     * @var binary
     *
     * @ORM\Column(name="position_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $positionId;

    /**
     * @var string
     *
     * @ORM\Column(name="arguments", type="blob", length=65535, nullable=false)
     */
    private $arguments;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId;

    public function getPositionId()
    {
        return $this->positionId;
    }

    public function getArguments()
    {
        return $this->arguments;
    }

    public function setArguments($arguments): self
    {
        $this->arguments = $arguments;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getAddonId()
    {
        return $this->addonId;
    }

    public function setAddonId($addonId): self
    {
        $this->addonId = $addonId;

        return $this;
    }


}
