<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfNodeType
 *
 * @ORM\Table(name="xf_node_type")
 * @ORM\Entity
 */
class XfNodeType
{
    /**
     * @var binary
     *
     * @ORM\Column(name="node_type_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nodeTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_identifier", type="string", length=75, nullable=false)
     */
    private $entityIdentifier;

    /**
     * @var string
     *
     * @ORM\Column(name="permission_group_id", type="string", length=25, nullable=false)
     */
    private $permissionGroupId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="admin_route", type="string", length=75, nullable=false)
     */
    private $adminRoute;

    /**
     * @var string
     *
     * @ORM\Column(name="public_route", type="string", length=75, nullable=false)
     */
    private $publicRoute;

    /**
     * @var string
     *
     * @ORM\Column(name="handler_class", type="string", length=100, nullable=false)
     */
    private $handlerClass = '';

    public function getNodeTypeId()
    {
        return $this->nodeTypeId;
    }

    public function getEntityIdentifier(): ?string
    {
        return $this->entityIdentifier;
    }

    public function setEntityIdentifier(string $entityIdentifier): self
    {
        $this->entityIdentifier = $entityIdentifier;

        return $this;
    }

    public function getPermissionGroupId(): ?string
    {
        return $this->permissionGroupId;
    }

    public function setPermissionGroupId(string $permissionGroupId): self
    {
        $this->permissionGroupId = $permissionGroupId;

        return $this;
    }

    public function getAdminRoute(): ?string
    {
        return $this->adminRoute;
    }

    public function setAdminRoute(string $adminRoute): self
    {
        $this->adminRoute = $adminRoute;

        return $this;
    }

    public function getPublicRoute(): ?string
    {
        return $this->publicRoute;
    }

    public function setPublicRoute(string $publicRoute): self
    {
        $this->publicRoute = $publicRoute;

        return $this;
    }

    public function getHandlerClass(): ?string
    {
        return $this->handlerClass;
    }

    public function setHandlerClass(string $handlerClass): self
    {
        $this->handlerClass = $handlerClass;

        return $this;
    }


}
