<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfEditorDropdown
 *
 * @ORM\Table(name="xf_editor_dropdown")
 * @ORM\Entity
 */
class XfEditorDropdown
{
    /**
     * @var binary
     *
     * @ORM\Column(name="cmd", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmd;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=50, nullable=false, options={"comment"="Optional icon"})
     */
    private $icon = '';

    /**
     * @var string
     *
     * @ORM\Column(name="buttons", type="blob", length=65535, nullable=false)
     */
    private $buttons;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    public function getCmd()
    {
        return $this->cmd;
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

    public function getButtons()
    {
        return $this->buttons;
    }

    public function setButtons($buttons): self
    {
        $this->buttons = $buttons;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }


}
