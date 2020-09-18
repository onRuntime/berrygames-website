<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfCodeEventListener
 *
 * @ORM\Table(name="xf_code_event_listener", indexes={@ORM\Index(name="event_id_execute_order", columns={"event_id", "execute_order"}), @ORM\Index(name="addon_id_event_id", columns={"addon_id", "event_id"})})
 * @ORM\Entity
 */
class XfCodeEventListener
{
    /**
     * @var int
     *
     * @ORM\Column(name="event_listener_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventListenerId;

    /**
     * @var binary
     *
     * @ORM\Column(name="event_id", type="binary", nullable=false)
     */
    private $eventId;

    /**
     * @var int
     *
     * @ORM\Column(name="execute_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $executeOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="callback_class", type="string", length=100, nullable=false)
     */
    private $callbackClass;

    /**
     * @var string
     *
     * @ORM\Column(name="callback_method", type="string", length=75, nullable=false)
     */
    private $callbackMethod;

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

    /**
     * @var string
     *
     * @ORM\Column(name="hint", type="string", length=255, nullable=false)
     */
    private $hint = '';

    public function getEventListenerId(): ?int
    {
        return $this->eventListenerId;
    }

    public function getEventId()
    {
        return $this->eventId;
    }

    public function setEventId($eventId): self
    {
        $this->eventId = $eventId;

        return $this;
    }

    public function getExecuteOrder(): ?int
    {
        return $this->executeOrder;
    }

    public function setExecuteOrder(int $executeOrder): self
    {
        $this->executeOrder = $executeOrder;

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

    public function getCallbackClass(): ?string
    {
        return $this->callbackClass;
    }

    public function setCallbackClass(string $callbackClass): self
    {
        $this->callbackClass = $callbackClass;

        return $this;
    }

    public function getCallbackMethod(): ?string
    {
        return $this->callbackMethod;
    }

    public function setCallbackMethod(string $callbackMethod): self
    {
        $this->callbackMethod = $callbackMethod;

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

    public function getHint(): ?string
    {
        return $this->hint;
    }

    public function setHint(string $hint): self
    {
        $this->hint = $hint;

        return $this;
    }


}
