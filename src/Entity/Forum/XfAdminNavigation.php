<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAdminNavigation
 *
 * @ORM\Table(name="xf_admin_navigation", indexes={@ORM\Index(name="parent_navigation_id_display_order", columns={"parent_navigation_id", "display_order"})})
 * @ORM\Entity
 */
class XfAdminNavigation
{
    /**
     * @var binary
     *
     * @ORM\Column(name="navigation_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $navigationId;

    /**
     * @var binary
     *
     * @ORM\Column(name="parent_navigation_id", type="binary", nullable=false)
     */
    private $parentNavigationId;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=50, nullable=false)
     */
    private $link = '';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=50, nullable=false)
     */
    private $icon = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="admin_permission_id", type="binary", nullable=false)
     */
    private $adminPermissionId = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="debug_only", type="boolean", nullable=false)
     */
    private $debugOnly = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="development_only", type="boolean", nullable=false)
     */
    private $developmentOnly = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="hide_no_children", type="boolean", nullable=false)
     */
    private $hideNoChildren = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getNavigationId()
    {
        return $this->navigationId;
    }

    public function getParentNavigationId()
    {
        return $this->parentNavigationId;
    }

    public function setParentNavigationId($parentNavigationId): self
    {
        $this->parentNavigationId = $parentNavigationId;

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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
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

    public function getAdminPermissionId()
    {
        return $this->adminPermissionId;
    }

    public function setAdminPermissionId($adminPermissionId): self
    {
        $this->adminPermissionId = $adminPermissionId;

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

    public function getDevelopmentOnly(): ?bool
    {
        return $this->developmentOnly;
    }

    public function setDevelopmentOnly(bool $developmentOnly): self
    {
        $this->developmentOnly = $developmentOnly;

        return $this;
    }

    public function getHideNoChildren(): ?bool
    {
        return $this->hideNoChildren;
    }

    public function setHideNoChildren(bool $hideNoChildren): self
    {
        $this->hideNoChildren = $hideNoChildren;

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
