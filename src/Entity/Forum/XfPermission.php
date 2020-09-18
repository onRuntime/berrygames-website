<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPermission
 *
 * @ORM\Table(name="xf_permission", indexes={@ORM\Index(name="display_order", columns={"display_order"})})
 * @ORM\Entity
 */
class XfPermission
{
    /**
     * @var binary
     *
     * @ORM\Column(name="permission_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $permissionId;

    /**
     * @var binary
     *
     * @ORM\Column(name="permission_group_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $permissionGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="permission_type", type="string", length=0, nullable=false)
     */
    private $permissionType;

    /**
     * @var binary
     *
     * @ORM\Column(name="interface_group_id", type="binary", nullable=false)
     */
    private $interfaceGroupId;

    /**
     * @var binary
     *
     * @ORM\Column(name="depend_permission_id", type="binary", nullable=false)
     */
    private $dependPermissionId;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getPermissionId()
    {
        return $this->permissionId;
    }

    public function getPermissionGroupId()
    {
        return $this->permissionGroupId;
    }

    public function getPermissionType(): ?string
    {
        return $this->permissionType;
    }

    public function setPermissionType(string $permissionType): self
    {
        $this->permissionType = $permissionType;

        return $this;
    }

    public function getInterfaceGroupId()
    {
        return $this->interfaceGroupId;
    }

    public function setInterfaceGroupId($interfaceGroupId): self
    {
        $this->interfaceGroupId = $interfaceGroupId;

        return $this;
    }

    public function getDependPermissionId()
    {
        return $this->dependPermissionId;
    }

    public function setDependPermissionId($dependPermissionId): self
    {
        $this->dependPermissionId = $dependPermissionId;

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
