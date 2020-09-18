<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfCodeEvent
 *
 * @ORM\Table(name="xf_code_event")
 * @ORM\Entity
 */
class XfCodeEvent
{
    /**
     * @var binary
     *
     * @ORM\Column(name="event_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getEventId()
    {
        return $this->eventId;
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
