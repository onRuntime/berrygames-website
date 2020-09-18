<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfOptionGroup
 *
 * @ORM\Table(name="xf_option_group", indexes={@ORM\Index(name="display_order", columns={"display_order"})})
 * @ORM\Entity
 */
class XfOptionGroup
{
    /**
     * @var binary
     *
     * @ORM\Column(name="group_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=50, nullable=false, options={"comment"="Optional icon"})
     */
    private $icon = '';

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="debug_only", type="boolean", nullable=false)
     */
    private $debugOnly;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getGroupId()
    {
        return $this->groupId;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    public function getDebugOnly(): ?bool
    {
        return $this->debugOnly;
    }

    public function setDebugOnly(bool $debugOnly): self
    {
        $this->debugOnly = $debugOnly;

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
