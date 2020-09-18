<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadPrefix
 *
 * @ORM\Table(name="xf_thread_prefix", indexes={@ORM\Index(name="materialized_order", columns={"materialized_order"})})
 * @ORM\Entity
 */
class XfThreadPrefix
{
    /**
     * @var int
     *
     * @ORM\Column(name="prefix_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prefixId;

    /**
     * @var int
     *
     * @ORM\Column(name="prefix_group_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $prefixGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="materialized_order", type="integer", nullable=false, options={"unsigned"=true,"comment"="Internally-set order, based on prefix_group.display_order, prefix.display_order"})
     */
    private $materializedOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="css_class", type="string", length=50, nullable=false)
     */
    private $cssClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="allowed_user_group_ids", type="blob", length=65535, nullable=false)
     */
    private $allowedUserGroupIds;

    public function getPrefixId(): ?int
    {
        return $this->prefixId;
    }

    public function getPrefixGroupId(): ?int
    {
        return $this->prefixGroupId;
    }

    public function setPrefixGroupId(int $prefixGroupId): self
    {
        $this->prefixGroupId = $prefixGroupId;

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

    public function getMaterializedOrder(): ?int
    {
        return $this->materializedOrder;
    }

    public function setMaterializedOrder(int $materializedOrder): self
    {
        $this->materializedOrder = $materializedOrder;

        return $this;
    }

    public function getCssClass(): ?string
    {
        return $this->cssClass;
    }

    public function setCssClass(string $cssClass): self
    {
        $this->cssClass = $cssClass;

        return $this;
    }

    public function getAllowedUserGroupIds()
    {
        return $this->allowedUserGroupIds;
    }

    public function setAllowedUserGroupIds($allowedUserGroupIds): self
    {
        $this->allowedUserGroupIds = $allowedUserGroupIds;

        return $this;
    }


}
