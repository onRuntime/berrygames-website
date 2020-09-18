<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfNode
 *
 * @ORM\Table(name="xf_node", uniqueConstraints={@ORM\UniqueConstraint(name="node_name_unique", columns={"node_name", "node_type_id"})}, indexes={@ORM\Index(name="display_order", columns={"display_order"}), @ORM\Index(name="display_in_list", columns={"display_in_list", "lft"}), @ORM\Index(name="lft", columns={"lft"}), @ORM\Index(name="parent_node_id", columns={"parent_node_id"})})
 * @ORM\Entity
 */
class XfNode
{
    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="node_name", type="string", length=50, nullable=true, options={"comment"="Unique column used as string ID by some node types"})
     */
    private $nodeName;

    /**
     * @var binary
     *
     * @ORM\Column(name="node_type_id", type="binary", nullable=false)
     */
    private $nodeTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_node_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parentNodeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $displayOrder = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="display_in_list", type="boolean", nullable=false, options={"default"="1","comment"="If 0, hidden from node list. Still counts for lft/rgt."})
     */
    private $displayInList = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="lft", type="integer", nullable=false, options={"unsigned"=true,"comment"="Nested set info 'left' value"})
     */
    private $lft = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false, options={"unsigned"=true,"comment"="Nested set info 'right' value"})
     */
    private $rgt = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="depth", type="integer", nullable=false, options={"unsigned"=true,"comment"="Depth = 0: no parent"})
     */
    private $depth = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="style_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Style override for specific node"})
     */
    private $styleId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="effective_style_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Style override; pushed down tree"})
     */
    private $effectiveStyleId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="breadcrumb_data", type="blob", length=65535, nullable=true)
     */
    private $breadcrumbData;

    /**
     * @var binary
     *
     * @ORM\Column(name="navigation_id", type="binary", nullable=false)
     */
    private $navigationId = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="effective_navigation_id", type="binary", nullable=false)
     */
    private $effectiveNavigationId = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="xfa_nit_type", type="boolean", nullable=false)
     */
    private $xfaNitType = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="xfa_nit_params", type="text", length=65535, nullable=true)
     */
    private $xfaNitParams;

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getNodeName(): ?string
    {
        return $this->nodeName;
    }

    public function setNodeName(?string $nodeName): self
    {
        $this->nodeName = $nodeName;

        return $this;
    }

    public function getNodeTypeId()
    {
        return $this->nodeTypeId;
    }

    public function setNodeTypeId($nodeTypeId): self
    {
        $this->nodeTypeId = $nodeTypeId;

        return $this;
    }

    public function getParentNodeId(): ?int
    {
        return $this->parentNodeId;
    }

    public function setParentNodeId(int $parentNodeId): self
    {
        $this->parentNodeId = $parentNodeId;

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

    public function getDisplayInList(): ?bool
    {
        return $this->displayInList;
    }

    public function setDisplayInList(bool $displayInList): self
    {
        $this->displayInList = $displayInList;

        return $this;
    }

    public function getLft(): ?int
    {
        return $this->lft;
    }

    public function setLft(int $lft): self
    {
        $this->lft = $lft;

        return $this;
    }

    public function getRgt(): ?int
    {
        return $this->rgt;
    }

    public function setRgt(int $rgt): self
    {
        $this->rgt = $rgt;

        return $this;
    }

    public function getDepth(): ?int
    {
        return $this->depth;
    }

    public function setDepth(int $depth): self
    {
        $this->depth = $depth;

        return $this;
    }

    public function getStyleId(): ?int
    {
        return $this->styleId;
    }

    public function setStyleId(int $styleId): self
    {
        $this->styleId = $styleId;

        return $this;
    }

    public function getEffectiveStyleId(): ?int
    {
        return $this->effectiveStyleId;
    }

    public function setEffectiveStyleId(int $effectiveStyleId): self
    {
        $this->effectiveStyleId = $effectiveStyleId;

        return $this;
    }

    public function getBreadcrumbData()
    {
        return $this->breadcrumbData;
    }

    public function setBreadcrumbData($breadcrumbData): self
    {
        $this->breadcrumbData = $breadcrumbData;

        return $this;
    }

    public function getNavigationId()
    {
        return $this->navigationId;
    }

    public function setNavigationId($navigationId): self
    {
        $this->navigationId = $navigationId;

        return $this;
    }

    public function getEffectiveNavigationId()
    {
        return $this->effectiveNavigationId;
    }

    public function setEffectiveNavigationId($effectiveNavigationId): self
    {
        $this->effectiveNavigationId = $effectiveNavigationId;

        return $this;
    }

    public function getXfaNitType(): ?bool
    {
        return $this->xfaNitType;
    }

    public function setXfaNitType(bool $xfaNitType): self
    {
        $this->xfaNitType = $xfaNitType;

        return $this;
    }

    public function getXfaNitParams(): ?string
    {
        return $this->xfaNitParams;
    }

    public function setXfaNitParams(?string $xfaNitParams): self
    {
        $this->xfaNitParams = $xfaNitParams;

        return $this;
    }


}
