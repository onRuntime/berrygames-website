<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfHelpPage
 *
 * @ORM\Table(name="xf_help_page", uniqueConstraints={@ORM\UniqueConstraint(name="page_name", columns={"page_name"})}, indexes={@ORM\Index(name="display_order", columns={"display_order"})})
 * @ORM\Entity
 */
class XfHelpPage
{
    /**
     * @var binary
     *
     * @ORM\Column(name="page_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageId;

    /**
     * @var string
     *
     * @ORM\Column(name="page_name", type="string", length=50, nullable=false)
     */
    private $pageName;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="callback_class", type="string", length=100, nullable=false)
     */
    private $callbackClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="callback_method", type="string", length=75, nullable=false)
     */
    private $callbackMethod = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="advanced_mode", type="boolean", nullable=false)
     */
    private $advancedMode = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getPageId()
    {
        return $this->pageId;
    }

    public function getPageName(): ?string
    {
        return $this->pageName;
    }

    public function setPageName(string $pageName): self
    {
        $this->pageName = $pageName;

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

    public function getAdvancedMode(): ?bool
    {
        return $this->advancedMode;
    }

    public function setAdvancedMode(bool $advancedMode): self
    {
        $this->advancedMode = $advancedMode;

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
